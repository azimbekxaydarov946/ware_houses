INSERT IGNORE INTO roles (name, description)
VALUES
  ('admin', 'Admin role with all permissions'),
  ('user', 'User role with limited permissions'),
  ('guest', 'Guest role with no permissions');
