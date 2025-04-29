# 🌐 Tài liệu CI/CD - Frontend

## 🧩 Công nghệ sử dụng
- HTML, CSS (tĩnh)
- Docker (NGINX để serve nội dung)
- GitHub Actions (hoặc GitLab CI)
- Docker Hub
- VPS Linux

---

## 📦 Dockerfile Frontend

```Dockerfile
FROM nginx:alpine

COPY . /usr/share/nginx/html
```

---

## 🛠 Cấu trúc thư mục

```
frontend/
├── index.html
├── Dockerfile
└── .github/
    └── workflows/
        └── frontend.yml
```

---

## 🔁 CI/CD Workflow - GitHub Actions

```yaml
name: Build & Deploy Frontend

on:
  push:
    paths:
      - 'frontend/**'

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v3

      - name: Login Docker Hub
        run: echo "${{ secrets.DOCKER_PASSWORD }}" | docker login -u "${{ secrets.DOCKER_USERNAME }}" --password-stdin

      - name: Build Docker image
        run: docker build -t yourdockeruser/frontend:latest ./frontend

      - name: Push image to Docker Hub
        run: docker push yourdockeruser/frontend:latest

      - name: Deploy to VPS
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.VPS_HOST }}
          username: ${{ secrets.VPS_USER }}
          key: ${{ secrets.VPS_KEY }}
          script: |
            docker pull yourdockeruser/frontend:latest
            docker stop frontend || true && docker rm frontend || true
            docker run -d -p 80:80 --name frontend yourdockeruser/frontend:latest
```

---

## 🧪 Kiểm tra sau khi deploy

- Truy cập frontend: `http://your-vps-ip/`
- Đảm bảo trang HTML được hiển thị đúng
