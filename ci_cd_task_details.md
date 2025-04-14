
# 📘 Chi Tiết Công Việc Dự Án CI/CD (8 Tuần)

## 🧑‍💻 Thành viên:
- **A**: DevOps & Hạ tầng
- **B**: Backend cơ bản
- **C**: Frontend & Tài liệu

---

## 📅 Tuần 1: Lên kế hoạch tổng thể

### Mục tiêu:
- Định hướng công nghệ sử dụng.
- Tạo cấu trúc ban đầu cho hệ thống và chia việc.

### Công việc chi tiết:
- [ ] A: Tìm hiểu và chọn công cụ CI/CD (GitHub Actions hoặc GitLab CI/CD).
- [ ] A: Chọn nền tảng triển khai (VPS cá nhân, Heroku, Render, v.v.).
- [ ] B: Tạo backend API cơ bản (Node.js, Express, hoặc Flask).
- [ ] C: Tạo frontend đơn giản (HTML tĩnh hoặc React/Vue).

---

## 📅 Tuần 2: Setup môi trường

### Mục tiêu:
- Thiết lập môi trường làm việc, phát triển và chạy thử backend/frontend bằng Docker.

### Công việc chi tiết:
- [ ] A: Tạo Git repo (GitHub hoặc GitLab), tạo nhánh `main`, `dev`.
- [ ] A: Cài đặt Docker, NGINX trên VPS.
- [ ] B: Tạo Dockerfile và docker-compose cho backend.
- [ ] C: Tạo Dockerfile/frontend config và gắn với NGINX.

---

## 📅 Tuần 3–4: Thiết kế và triển khai CI/CD đơn giản

### Mục tiêu:
- Có quy trình tự động build và deploy mỗi khi cập nhật mã nguồn.

### Công việc chi tiết:
- [ ] A: Học và hiểu GitHub Actions hoặc GitLab CI qua tutorial/video.
- [ ] A: Tạo file YAML CI/CD pipeline từ mẫu sẵn có.
- [ ] A: Cấu hình bước build Docker image và push lên Docker Hub.
- [ ] A, B: Gắn bước deploy image vào VPS tự động sau khi push.
- [ ] A, C: Kiểm tra lại kết quả: push code → deploy chạy tự động.

---

## 📅 Tuần 5: Kiểm tra CI/CD hoạt động

### Mục tiêu:
- Kiểm thử quy trình CI/CD có vận hành ổn định không.

### Công việc chi tiết:
- [ ] B, C: Chỉnh sửa nhỏ một file (README hoặc nội dung trang).
- [ ] A: Push code, theo dõi CI/CD chạy qua GitHub/GitLab.
- [ ] A: Xác nhận backend/frontend tự động cập nhật.
- [ ] C: Ghi lại từng bước thực hiện vào tài liệu hướng dẫn sử dụng CI/CD.

---

## 📅 Tuần 6: Deploy production đơn giản

### Mục tiêu:
- Đưa ứng dụng lên môi trường production có domain + SSL.

### Công việc chi tiết:
- [ ] A: Gắn tên miền vào VPS (qua nhà cung cấp tên miền).
- [ ] A: Cài Let’s Encrypt với certbot để tạo SSL miễn phí.
- [ ] A: Cấu hình NGINX reverse proxy + HTTPS.
- [ ] A: Deploy bản chính thức lên production.
- [ ] C: Viết lại hướng dẫn cấu hình production đơn giản cho người mới.

---

## 📅 Tuần 7: Giám sát đơn giản

### Mục tiêu:
- Theo dõi ứng dụng có đang chạy không và có cảnh báo khi lỗi.

### Công việc chi tiết:
- [ ] A: Viết bash script hoặc dùng curl để kiểm tra `/health` của backend.
- [ ] A: Dùng cron job chạy kiểm tra định kỳ.
- [ ] A: Thiết lập gửi cảnh báo đơn giản qua Telegram Bot hoặc email nếu lỗi.
- [ ] C: Ghi chú quy trình restart khi ứng dụng lỗi.

---

## 📅 Tuần 8: Tổng kết và báo cáo

### Mục tiêu:
- Hoàn thiện hệ thống, tài liệu và demo báo cáo nhóm.

### Công việc chi tiết:
- [ ] B: Viết tài liệu CI/CD backend (file YAML, build, deploy backend).
- [ ] C: Viết tài liệu CI/CD frontend (dockerfile, NGINX, build deploy).
- [ ] A: Vẽ sơ đồ hệ thống CI/CD: Git → CI → Build → Deploy → VPS.
- [ ] C: Chuẩn bị slide báo cáo, demo trực tiếp push → deploy.

---

## 🎯 Ghi chú chung:
- Ưu tiên sử dụng mẫu có sẵn, không viết từ đầu nếu không cần.
- Luôn ghi lại các bước thực hiện để dễ bàn giao và bảo trì.
- Có thể dùng Notion hoặc GitHub Wiki để ghi tài liệu dễ tra cứu.
