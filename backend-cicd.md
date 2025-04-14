# 🚀 Tài liệu CI/CD - Backend

## 🧩 Công nghệ sử dụng
- PHP (chạy qua built-in server hoặc Apache)
- Docker
- GitHub Actions (hoặc GitLab CI)
- Docker Hub
- VPS Linux (Debian/Ubuntu)

---

## 📦 Dockerfile Backend

```Dockerfile
FROM php:8.1-cli

WORKDIR /var/www/html

COPY . .

CMD [ "php", "-S", "0.0.0.0:8000" ]
```

---

## 🛠 Cấu trúc thư mục

```
backend/
├── index.php
├── Dockerfile
└── .github/
    └── workflows/
        └── backend.yml
```

---

## 🔁 CI/CD Workflow - GitHub Actions

```yaml
name: Build & Deploy Backend

on:
  push:
    paths:
      - 'backend/**'

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v3

      - name: Login Docker Hub
        run: echo "${{ secrets.DOCKER_PASSWORD }}" | docker login -u "${{ secrets.DOCKER_USERNAME }}" --password-stdin

      - name: Build Docker image
        run: docker build -t yourdockeruser/backend:latest ./backend

      - name: Push image to Docker Hub
        run: docker push yourdockeruser/backend:latest

      - name: Deploy to VPS
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.VPS_HOST }}
          username: ${{ secrets.VPS_USER }}
          key: ${{ secrets.VPS_KEY }}
          script: |
            docker pull yourdockeruser/backend:latest
            docker stop backend || true && docker rm backend || true
            docker run -d -p 8000:8000 --name backend yourdockeruser/backend:latest
```

---

## 🧪 Kiểm tra sau khi deploy

- Truy cập: `http://your-vps-ip:8000/`
- Kiểm tra endpoint `/health` nếu có
