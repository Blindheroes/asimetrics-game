START TRANSACTION;

-- Memeriksa saldo pengguna
SELECT balance INTO @current_balance
FROM user_balance
WHERE user_id = @user_id;

IF @current_balance >= @total_purchase_cost THEN
  -- Memperbarui saldo
  UPDATE user_balance
  SET balance = balance - @total_purchase_cost,
      last_updated = NOW()
  WHERE user_id = @user_id;

  -- Menambahkan transaksi
  INSERT INTO transactions (user_id, stock_id, transaction_type, quantity, price, transaction_date)
  VALUES (@user_id, @stock_id, 'BUY', @quantity, @price, NOW());

  -- Memperbarui portofolio
  INSERT INTO portfolio (user_id, stock_id, quantity, average_price, created_at, updated_at)
  VALUES (@user_id, @stock_id, @quantity, @price, NOW(), NOW())
  ON DUPLICATE KEY UPDATE
    quantity = quantity + @quantity,
    average_price = ((average_price * quantity) + (@price * @quantity)) / (quantity + @quantity),
    updated_at = NOW();

  COMMIT;
ELSE
  ROLLBACK;
END IF;
