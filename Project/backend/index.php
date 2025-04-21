#backend/index.php
<?php
echo json_encode([
  "status" => "ok",
  "message" => "Backend đang chạy tốt!"
]);

// backend/Dockerfile
FROM php:8.1-cli
WORKDIR /var/www/html
COPY . .
CMD [ "php", "-S", "0.0.0.0:8000" ]
