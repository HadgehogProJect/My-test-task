CREATE TABLE utm_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    source VARCHAR(255) NOT NULL,
    medium VARCHAR(255) NOT NULL,
    campaign VARCHAR(255) NOT NULL,
    content VARCHAR(255) NULL,
    term VARCHAR(255) NULL
);

INSERT INTO utm_data (source, medium, campaign, content, term) VALUES
('google', 'cpc', 'summer', 'banner', 'video'),
('google', 'cpc', 'winter', 'delta', NULL),
('facebook', 'social', 'spring', 'ad1', 'click');