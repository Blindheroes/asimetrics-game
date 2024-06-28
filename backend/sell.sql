START TRANSACTION;

-- Memeriksa jumlah saham pengguna
SELECT quantity INTO @current_quantity
FROM portfolio
WHERE user_id = @user_id AND stock_id = @stock_id;

IF @current_quantity >= @quantity THEN
  -- Memperbarui saldo
  UPDATE user_balance
  SET balance = balance + @total_sale_proceeds,
      last_updated = NOW()
  WHERE user_id = @user_id;

  -- Menambahkan transaksi
  INSERT INTO transactions (user_id, stock_id, transaction_type, quantity, price, transaction_date)
  VALUES (@user_id, @stock_id, 'SELL', @quantity, @price, NOW());

  -- Memperbarui portofolio
  IF @current_quantity = @quantity THEN
    DELETE FROM portfolio
    WHERE user_id = @user_id AND stock_id = @stock_id;
  ELSE
    UPDATE portfolio
    SET quantity = quantity - @quantity,
        updated_at = NOW()
    WHERE user_id = @user_id AND stock_id = @stock_id;
  END IF;

  COMMIT;
ELSE
  ROLLBACK;
END IF;
