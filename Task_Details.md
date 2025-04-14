
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


Để làm rõ hơn về **Định hướng công nghệ sử dụng** và **Tạo cấu trúc ban đầu cho hệ thống và chia việc**, dưới đây là chi tiết các bước cần thực hiện cho phần này:

* * * * *

**1\. Định Hướng Công Nghệ Sử Dụng**
------------------------------------

### **1.1. Lựa chọn công cụ CI/CD**

-   **CI/CD (Continuous Integration / Continuous Delivery)** là quá trình tự động hóa kiểm tra, build và deploy mã nguồn mỗi khi có thay đổi trong repository.

-   Các công cụ phổ biến cho CI/CD:

    -   **GitHub Actions**: Dành cho các dự án trên GitHub. Tích hợp sẵn và dễ sử dụng.

    -   **GitLab CI**: Tích hợp CI/CD mạnh mẽ cho các dự án trên GitLab, hỗ trợ rất nhiều tính năng.

    -   **CircleCI**: Được biết đến với tốc độ nhanh và dễ cấu hình, hỗ trợ tích hợp với GitHub và Bitbucket.

    -   **Jenkins**: Tính linh hoạt cao, có thể tích hợp với nhiều công cụ khác nhưng cần cấu hình và bảo trì nhiều.

### **1.2. Lựa chọn nền tảng triển khai**

-   **VPS (Virtual Private Server)**: Cung cấp môi trường quản lý trực tiếp và quyền kiểm soát cao.

    -   **Ưu điểm**: Linh hoạt, kiểm soát tài nguyên hoàn toàn.

    -   **Nhược điểm**: Cần kỹ năng quản trị hệ thống, thiết lập và bảo mật.

-   **Heroku**: Dễ sử dụng, nhanh chóng triển khai nhưng chi phí cao khi scale.

-   **AWS, GCP, Azure**: Cung cấp dịch vụ cloud mạnh mẽ với nhiều tính năng mở rộng.

### **1.3. Công nghệ phát triển ứng dụng**

-   **Backend**:

    -   **Node.js (Express)**: Nền tảng phổ biến cho các ứng dụng web RESTful.

    -   **Python (Flask/Django)**: Python rất mạnh trong các ứng dụng web nhẹ hoặc ứng dụng yêu cầu xử lý dữ liệu nhanh.

    -   **Java (Spring Boot)**: Phù hợp cho các hệ thống cần tính bảo mật cao và yêu cầu quy mô lớn.

-   **Frontend**:

    -   **React**: Được sử dụng phổ biến với khả năng tái sử dụng các thành phần giao diện.

    -   **Vue.js**: Cũng rất phổ biến, dễ học và nhẹ nhàng.

    -   **HTML/CSS/JS (Vanilla)**: Phù hợp với các dự án đơn giản hoặc cần tốc độ phát triển nhanh.

-   **Docker**:

    -   Đóng gói ứng dụng và môi trường trong container, giúp deploy dễ dàng hơn giữa các môi trường.

### **1.4. Quản lý cơ sở dữ liệu**

-   **MySQL**: Phổ biến, dễ sử dụng và rất mạnh mẽ cho các ứng dụng có quan hệ.

-   **MongoDB**: Dành cho các ứng dụng cần tính linh hoạt trong việc lưu trữ dữ liệu không quan hệ.

-   **PostgreSQL**: Thích hợp cho các ứng dụng cần tính năng phức tạp hơn MySQL (ví dụ: hỗ trợ JSONB, indexing nâng cao).

* * * * *

**2\. Tạo Cấu Trúc Ban Đầu Cho Hệ Thống và Chia Việc**
------------------------------------------------------

### **2.1. Xây dựng Cấu Trúc Dự Án**

-   **Frontend**:

    -   `/src`: Chứa tất cả mã nguồn cho frontend.

    -   `/public`: Chứa các tài nguyên tĩnh như hình ảnh, fonts, favicon.

    -   `/components`: Chứa các component của ứng dụng (dành cho React/Vue).

    -   `/assets`: Các tài nguyên như CSS, JavaScript, hình ảnh.

    -   `/views`: Các view hoặc template động.

-   **Backend**:

    -   `/src`: Mã nguồn backend (API, các route, controller).

    -   `/config`: Các cấu hình của ứng dụng (database, môi trường, v.v.).

    -   `/models`: Các mô hình cơ sở dữ liệu.

    -   `/controllers`: Các controller xử lý logic ứng dụng.

    -   `/routes`: Định nghĩa các route cho API.

-   **Docker**:

    -   `Dockerfile`: Mô tả cách xây dựng image của dự án.

    -   `docker-compose.yml`: Cấu hình cho Docker Compose (nếu sử dụng nhiều service như database, Redis, v.v.).

-   **CI/CD**:

    -   `.github/workflows`: Chứa các file cấu hình GitHub Actions.

    -   `.gitlab-ci.yml`: File cấu hình cho GitLab CI.

    -   `Jenkinsfile`: Nếu sử dụng Jenkins.

### **2.2. Phân Công Công Việc**

#### **A. Thành viên A - DevOps & Hạ Tầng**

-   Lựa chọn và cài đặt công cụ CI/CD (GitHub Actions hoặc GitLab CI).

-   Thiết lập môi trường Docker cho cả frontend và backend.

-   Cài đặt và cấu hình NGINX cho production.

-   Cài đặt và cấu hình SSL (Let's Encrypt).

-   Thiết lập công cụ giám sát cơ bản.

#### **B. Thành viên B - Backend**

-   Thiết kế và phát triển API backend (Node.js/Express, Flask, hoặc Spring Boot).

-   Cấu hình cơ sở dữ liệu (MySQL, MongoDB hoặc PostgreSQL).

-   Cài đặt và cấu hình các API route.

-   Tạo Dockerfile cho ứng dụng backend.

-   Cấu hình CI/CD để tự động build và deploy ứng dụng backend.

#### **C. Thành viên C - Frontend**

-   Thiết kế và phát triển giao diện người dùng (React/Vue hoặc HTML/CSS/JS).

-   Cài đặt Dockerfile cho frontend.

-   Cấu hình các route/frontend endpoint.

-   Tạo tài liệu hướng dẫn sử dụng CI/CD.

-   Kiểm tra giao diện sau khi deploy để đảm bảo ứng dụng hoạt động chính xác.

* * * * *

### **2.3. Tạo Quản lý Lịch Trình**

-   **Lịch trình chi tiết** cần chia rõ ràng công việc mỗi tuần. Cần theo dõi các milestone quan trọng như:

    -   Hoàn thành cấu hình CI/CD trong tuần 3-4.

    -   Hoàn thành deploy và kiểm tra production trong tuần 6.

    -   Tài liệu và báo cáo hoàn thành vào tuần 8.

* * * * *

Như vậy, bạn sẽ có thể xác định rõ các công cụ và quy trình cần sử dụng, đồng thời phân chia công việc phù hợp cho từng thành viên trong nhóm. Nếu cần hỗ trợ gì thêm, cứ báo cho mình nhé!

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
