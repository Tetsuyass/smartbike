-- Connexion en tant qu'utilisateur postgres
CREATE DATABASE smartbike;
-- Puis dans la DB smartbike:
-- Table produits
CREATE TABLE products (
                          id SERIAL PRIMARY KEY,
                          name VARCHAR(100) NOT NULL,
                          slug VARCHAR(120) UNIQUE NOT NULL,
                          description TEXT,
                          price NUMERIC(10,2) NOT NULL,
                          image VARCHAR(255),
                          created_at TIMESTAMP DEFAULT now()
);

-- Table commandes
CREATE TABLE orders (
                        id SERIAL PRIMARY KEY,
                        product_id INTEGER REFERENCES products(id) ON DELETE SET NULL,
                        last_name VARCHAR(100) NOT NULL,
                        first_name VARCHAR(100) NOT NULL,
                        email VARCHAR(150) NOT NULL,
                        message TEXT,
                        created_at TIMESTAMP DEFAULT now()
);

-- Table contact messages
CREATE TABLE contacts (
                          id SERIAL PRIMARY KEY,
                          last_name VARCHAR(100),
                          first_name VARCHAR(100),
                          email VARCHAR(150),
                          message TEXT,
                          created_at TIMESTAMP DEFAULT now()
);

-- Seed : quelques vélos
INSERT INTO products (name, slug, description, price, image)
VALUES
    ('Bike5', 'bike5', 'Le tout nouveau Bike5 — vélo électrique performant et léger.', 2499.00, 'assets/images/bike5.jpg'),
    ('BikeOne', 'bikeone', 'BikeOne — classique urbain.', 1299.00, 'assets/images/bikeone.jpg'),
    ('Bike22', 'bike22', 'Bike22 — polyvalent tout-terrain.', 1799.00, 'assets/images/bike22.jpg'),
    ('BikeFirst', 'bikefirst', 'BikeFirst — entrée de gamme fiable.', 999.00, 'assets/images/bikefirst.jpg');
