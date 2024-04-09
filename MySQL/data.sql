-- Sample data for authors
INSERT INTO authors (name, biography, contact_information)
VALUES (#)

-- Sample data for books
INSERT INTO books (title, author_id, publisher, publication_data, isbn, genre, price)
VALUES (#)

-- Sample data for customers
INSERT INTO customers (name, email, address, phone_number, payment_information)
VALUES (#)

--Sample data for orders
INSERT INTO orders (data, order_number, customer_id, status)
VALUES (#)

-- Sample data for transactions
INSERT INTO transactions (order_id, payment_amount, payment_date, payment_method)
VALUES (#)
