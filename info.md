# 🚀 Mô Hình CI/CD 

## 1️⃣ Quản lý mã nguồn (SCM - Source Code Management)
- **Công cụ**: Git (GitHub, GitLab, Bitbucket).
- **Hoạt động**:
  - ✅ Developer push code lên repository.
  - ✅ Thiết lập branch chính (`main` hoặc `master`).
  - ✅ Sử dụng pull request (PR) để kiểm tra trước khi merge.

## 2️⃣ Tích hợp liên tục (CI - Continuous Integration)
- **Công cụ**: GitHub Actions, GitLab CI/CD, Jenkins.
- **Hoạt động**:
  - ✅ Khi có code mới, CI pipeline được kích hoạt.
  - ✅ Kiểm tra cú pháp và chạy unit test.
  - ✅ Nếu test pass, tiếp tục build ứng dụng.

## 3️⃣ Xây dựng và đóng gói (Build & Packaging)
- **Công cụ**: Docker (hoặc build trực tiếp nếu không dùng container).
- **Hoạt động**:
  - ✅ Build ứng dụng thành file chạy (`.jar`, `.war`, `.exe`).
  - ✅ Nếu dùng container:
    - Tạo `Dockerfile`.
    - Build Docker image:  
      ```sh
      docker build -t my-app .
      ```
    - Đẩy lên Docker Hub:  
      ```sh
      docker push my-app
      ```

## 4️⃣ Triển khai liên tục (CD - Continuous Deployment)
- **Công cụ**: Docker Compose, SCP, SSH, hoặc `git pull`.
- **Hoạt động**:
  - ✅ Nếu server đơn giản:
    - Dùng `scp` để copy file lên server.
    - SSH vào server và restart ứng dụng.
  - ✅ Nếu dùng Docker:
    - Pull image mới từ registry:  
      ```sh
      docker pull my-app
      ```
    - Chạy container mới:  
      ```sh
      docker run -d -p 80:8080 my-app
      ```

## 5️⃣ Giám sát & Logging (Optional - nhưng nên có)
- **Công cụ**: Prometheus, Grafana, Logtail.
- **Hoạt động**:
  - ✅ Theo dõi hiệu suất (CPU, RAM, Disk).
  - ✅ Xem log lỗi khi có sự cố.

---

## 🎯 Tóm tắt quy trình CI/CD

1. Developer push code lên GitHub.
2. GitHub Actions/Jenkins chạy CI: kiểm thử & build.
3. Nếu thành công, build Docker image (nếu cần).
4. Deploy lên server qua SSH hoặc Docker.
5. Restart ứng dụng.

👉 **Tự động hóa ở mức cơ bản, nhưng đủ hiệu quả cho các dự án nhỏ!** 🚀
