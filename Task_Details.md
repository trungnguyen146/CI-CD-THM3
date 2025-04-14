
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

Dưới đây là cách thiết lập môi trường làm việc, phát triển và chạy thử cho **backend (PHP)** và **frontend (HTML)** bằng **Docker**, với mục tiêu đơn giản hóa quá trình để bạn có thể dễ dàng hiểu được cách thức vận hành của **CI/CD** mà không cần phải quá chú trọng vào phần mã nguồn.

---

## **1. Mục Tiêu**

- **Backend (PHP)**: Chạy PHP trong môi trường Docker.
- **Frontend (HTML)**: Chạy các tệp HTML tĩnh trong một container Docker.
- **Docker**: Tạo ra các container cho backend và frontend, giúp đảm bảo môi trường phát triển đồng nhất cho tất cả thành viên trong nhóm.

---

## **2. Thiết Lập Docker cho Backend (PHP)**

### **Bước 1: Tạo Dockerfile cho PHP**

Để chạy ứng dụng PHP trong Docker, bạn cần tạo một **Dockerfile**. Dockerfile sẽ định nghĩa cách thức để Docker xây dựng môi trường và chạy ứng dụng.

**Dockerfile cho PHP**:

```Dockerfile
# Chọn image PHP chính thức với Apache
FROM php:7.4-apache

# Cài đặt các extension cần thiết cho PHP (nếu có)
RUN docker-php-ext-install mysqli

# Copy mã nguồn vào thư mục của container
COPY ./src/ /var/www/html/

# Mở cổng 80 để truy cập ứng dụng từ bên ngoài
EXPOSE 80
```

- `FROM php:7.4-apache`: Chọn image chính thức của PHP với Apache để chạy ứng dụng.
- `COPY ./src/ /var/www/html/`: Copy tất cả mã nguồn PHP từ thư mục `src/` vào container.
- `EXPOSE 80`: Mở cổng 80 để có thể truy cập ứng dụng qua trình duyệt.

### **Bước 2: Tạo docker-compose.yml cho Backend**

**docker-compose.yml** giúp bạn dễ dàng quản lý các container backend và database nếu cần.

**docker-compose.yml cho PHP**:

```yaml
version: '3.7'
services:
  php:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./src:/var/www/html
```

- `build: .`: Xây dựng Docker image từ Dockerfile trong thư mục hiện tại.
- `ports: - "8080:80"`: Mở cổng 8080 trên máy chủ và chuyển tiếp đến cổng 80 trong container.
- `volumes`: Để giúp thay đổi mã nguồn trực tiếp mà không cần build lại Docker image mỗi khi sửa mã.

### **Bước 3: Cấu Trúc Thư Mục Dự Án**

- `src/`: Thư mục chứa mã nguồn PHP.
- `Dockerfile`: File Dockerfile cho backend.
- `docker-compose.yml`: Cấu hình Docker Compose cho backend.

### **Bước 4: Build và Run Backend**

Sau khi đã tạo Dockerfile và docker-compose.yml, bạn có thể xây dựng và chạy container PHP bằng cách sử dụng lệnh:

```bash
docker-compose up --build
```

Điều này sẽ tải image PHP, xây dựng và chạy container. Bạn có thể truy cập ứng dụng của mình tại **http://localhost:8080**.

---

## **3. Thiết Lập Docker cho Frontend (HTML)**

### **Bước 1: Tạo Dockerfile cho Frontend (HTML)**

Đối với frontend chỉ chứa tệp HTML, bạn có thể sử dụng **NGINX** để phục vụ các tệp tĩnh như HTML, CSS, JavaScript.

**Dockerfile cho Frontend**:

```Dockerfile
# Chọn image NGINX chính thức
FROM nginx:alpine

# Copy mã nguồn HTML vào thư mục của NGINX
COPY ./frontend/ /usr/share/nginx/html/

# Mở cổng 80
EXPOSE 80
```

- `FROM nginx:alpine`: Sử dụng image NGINX nhẹ để phục vụ các tệp HTML.
- `COPY ./frontend/ /usr/share/nginx/html/`: Copy các tệp HTML từ thư mục `frontend/` vào thư mục của NGINX.
- `EXPOSE 80`: Mở cổng 80 để có thể truy cập ứng dụng qua trình duyệt.

### **Bước 2: Tạo docker-compose.yml cho Frontend**

Tương tự như backend, bạn sẽ cần một file **docker-compose.yml** để cấu hình cho frontend.

**docker-compose.yml cho Frontend**:

```yaml
version: '3.7'
services:
  frontend:
    build: .
    ports:
      - "8081:80"
    volumes:
      - ./frontend:/usr/share/nginx/html
```

- `build: .`: Xây dựng Docker image từ Dockerfile trong thư mục hiện tại.
- `ports: - "8081:80"`: Mở cổng 8081 trên máy chủ và chuyển tiếp đến cổng 80 trong container.
- `volumes`: Giúp thay đổi tệp HTML trực tiếp mà không cần build lại Docker image.

### **Bước 3: Cấu Trúc Thư Mục Dự Án**

- `frontend/`: Thư mục chứa tệp HTML.
- `Dockerfile`: File Dockerfile cho frontend.
- `docker-compose.yml`: Cấu hình Docker Compose cho frontend.

### **Bước 4: Build và Run Frontend**

Sau khi đã có Dockerfile và docker-compose.yml cho frontend, bạn có thể xây dựng và chạy container bằng lệnh:

```bash
docker-compose up --build
```

Điều này sẽ chạy ứng dụng frontend và bạn có thể truy cập tại **http://localhost:8081**.

---

## **4. Kiểm Tra và Chạy Thử**

Sau khi hoàn thành các bước trên, bạn sẽ có:

- **Backend (PHP)** chạy tại **http://localhost:8080**.
- **Frontend (HTML)** chạy tại **http://localhost:8081**.

Bạn có thể mở trình duyệt và kiểm tra để chắc chắn mọi thứ hoạt động đúng.

---

## **5. Lợi Ích Khi Dùng Docker cho PHP và HTML**

- **Đồng nhất môi trường phát triển**: Docker đảm bảo rằng mọi người trong nhóm sẽ có môi trường phát triển giống nhau.
- **Tính di động**: Bạn có thể dễ dàng chạy ứng dụng ở mọi nơi mà không cần lo về cấu hình hệ thống.
- **Quản lý dễ dàng**: Sử dụng Docker Compose để quản lý các container, giúp phát triển và triển khai ứng dụng nhanh chóng.

---

## **6. Các Công Cụ và Lệnh Docker Cơ Bản**

- **Docker Compose**: Giúp bạn quản lý các container liên quan dễ dàng hơn.
  - `docker-compose up --build`: Xây dựng và chạy các container.
  - `docker-compose down`: Dừng và xóa các container.
  
- **Docker Build**: Tạo Docker image từ Dockerfile.
  - `docker build -t php-backend .`: Xây dựng Docker image cho backend.
  
- **Docker Run**: Chạy Docker container từ một image.
  - `docker run -p 8080:80 php-backend`: Chạy container PHP trên cổng 8080.

---

### **Tóm lại**, việc sử dụng Docker để phát triển và kiểm thử ứng dụng PHP và HTML giúp bạn dễ dàng tạo ra môi trường phát triển đồng nhất và tiết kiệm thời gian triển khai. Với những bước này, bạn chỉ cần tập trung vào việc hiểu quy trình CI/CD và cách các container hoạt động trong môi trường Docker mà không cần phải lo lắng về mã nguồn.

Nếu bạn cần hỗ trợ thêm hoặc có câu hỏi về các bước cụ thể, cứ thoải mái hỏi nhé!

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

Dưới đây là một quy trình chi tiết cho việc **tự động build và deploy mỗi khi cập nhật mã nguồn** với các bước công việc rõ ràng. Mình sẽ dựa trên **GitHub Actions** để tạo một pipeline CI/CD đơn giản.

---

## **1. Tự Động Build và Deploy Mỗi Khi Cập Nhật Mã Nguồn**

### **Công việc chi tiết**:

---

### **1.1. A: Học và hiểu GitHub Actions hoặc GitLab CI qua tutorial/video**

- **Mục tiêu**: Hiểu cách GitHub Actions hoặc GitLab CI hoạt động, các bước cơ bản để tạo pipeline tự động.
  
- **Công việc**: Tìm hiểu tài liệu chính thức hoặc video hướng dẫn từ GitHub hoặc GitLab.

  - **GitHub Actions**: [GitHub Actions Documentation](https://docs.github.com/en/actions)
  - **GitLab CI**: [GitLab CI Documentation](https://docs.gitlab.com/ee/ci/)

- **Thời gian ước tính**: 1-2 ngày.

---

### **1.2. A: Tạo file YAML CI/CD pipeline từ mẫu sẵn có**

- **Mục tiêu**: Tạo file **GitHub Actions YAML** cho pipeline CI/CD để tự động build và deploy khi có cập nhật mã nguồn.

- **Công việc**:
  - Tạo một file `.github/workflows/ci-cd.yml` trong repo GitHub.
  - Cấu hình các bước trong pipeline: build Docker image, push Docker image lên Docker Hub, deploy lên VPS.

- **Ví dụ về file `ci-cd.yml`**:

  ```yaml
  name: CI/CD Pipeline

  on:
    push:
      branches:
        - main # Chạy pipeline mỗi khi có cập nhật lên nhánh main

  jobs:
    build:
      runs-on: ubuntu-latest

      steps:
        - name: Check out code
          uses: actions/checkout@v2

        - name: Set up Docker
          uses: docker/setup-buildx-action@v1

        - name: Log in to Docker Hub
          uses: docker/login-action@v2
          with:
            username: ${{ secrets.DOCKER_USERNAME }}
            password: ${{ secrets.DOCKER_PASSWORD }}

        - name: Build Docker image
          run: |
            docker build -t myusername/myapp:$GITHUB_SHA .
            docker tag myusername/myapp:$GITHUB_SHA myusername/myapp:latest

        - name: Push Docker image to Docker Hub
          run: |
            docker push myusername/myapp:$GITHUB_SHA
            docker push myusername/myapp:latest

    deploy:
      runs-on: ubuntu-latest
      needs: build
      steps:
        - name: SSH into VPS and deploy
          uses: appleboy/ssh-action@v0.1.5
          with:
            host: ${{ secrets.VPS_HOST }}
            username: ${{ secrets.VPS_USERNAME }}
            password: ${{ secrets.VPS_PASSWORD }}
            script: |
              docker pull myusername/myapp:latest
              docker stop myapp || true
              docker rm myapp || true
              docker run -d --name myapp -p 80:80 myusername/myapp:latest
  ```

  **Giải thích**:
  - **on.push**: Quy định pipeline sẽ chạy mỗi khi có commit lên nhánh `main`.
  - **build**: Các bước để build Docker image và push lên Docker Hub.
  - **deploy**: Các bước deploy Docker image lên VPS qua SSH.

- **Thời gian ước tính**: 1-2 ngày.

---

### **1.3. A: Cấu hình bước build Docker image và push lên Docker Hub**

- **Mục tiêu**: Tự động build Docker image từ mã nguồn mỗi khi có commit và push image lên Docker Hub.

- **Công việc**:
  - Cấu hình bước **build Docker image** và **push lên Docker Hub** trong GitHub Actions (đã được thực hiện trong file `ci-cd.yml` ở bước trước).
  - Đảm bảo Docker Hub đã có tài khoản và repo để push image.

- **Bước thêm vào**:
  - Tạo **secrets** trong GitHub repo (`DOCKER_USERNAME` và `DOCKER_PASSWORD`) để bảo mật thông tin tài khoản Docker Hub.

- **Thời gian ước tính**: 1-2 ngày.

---

### **1.4. A, B: Gắn bước deploy image vào VPS tự động sau khi push**

- **Mục tiêu**: Sau khi Docker image được push lên Docker Hub, tự động deploy lên VPS mà không cần can thiệp thủ công.

- **Công việc**:
  - Sử dụng **SSH** để kết nối vào VPS từ GitHub Actions.
  - Tự động **pull Docker image** từ Docker Hub, **dừng và xóa container cũ**, và **chạy container mới**.

- **Bước thêm vào**:
  - Thiết lập **SSH key** cho GitHub Actions để kết nối an toàn với VPS.
  - Cấu hình **Docker** trên VPS (nếu chưa có) để đảm bảo có thể pull image và chạy container.

- **Ví dụ lệnh SSH**:
  ```bash
  docker pull myusername/myapp:latest
  docker stop myapp || true
  docker rm myapp || true
  docker run -d --name myapp -p 80:80 myusername/myapp:latest
  ```

- **Thời gian ước tính**: 1-2 ngày.

---

### **1.5. A, C: Kiểm tra lại kết quả: push code → deploy chạy tự động**

- **Mục tiêu**: Kiểm tra quy trình CI/CD xem có hoạt động đúng hay không khi bạn push mã nguồn mới lên GitHub.

- **Công việc**:
  - Đẩy mã nguồn mới lên GitHub (commit và push lên nhánh `main`).
  - Kiểm tra trong GitHub Actions xem pipeline có chạy thành công không.
  - Kiểm tra VPS xem container mới đã được chạy chưa.
  - Đảm bảo ứng dụng hoạt động chính xác trên VPS sau khi deploy.

- **Thời gian ước tính**: 1-2 ngày.

---

## **2. Các Bước Cần Chuẩn Bị**

1. **Tạo tài khoản Docker Hub**: Để push Docker image.
2. **Cấu hình SSH cho VPS**: Để GitHub Actions có thể deploy ứng dụng lên VPS.
3. **Tạo Secrets trong GitHub**:
   - `DOCKER_USERNAME`
   - `DOCKER_PASSWORD`
   - `VPS_HOST`
   - `VPS_USERNAME`
   - `VPS_PASSWORD`

---

## **3. Tổng Thời Gian Dự Kiến**

- Tổng thời gian cho tất cả các bước: **5-8 ngày**, tùy thuộc vào mức độ quen thuộc với các công cụ và việc thiết lập môi trường.

---

Hy vọng quy trình trên giúp bạn có cái nhìn rõ ràng về cách thiết lập CI/CD với Docker! Nếu có câu hỏi hay cần hỗ trợ thêm, cứ hỏi mình nhé!

---

## 📅 Tuần 5: Kiểm tra CI/CD hoạt động

### Mục tiêu:
- Kiểm thử quy trình CI/CD có vận hành ổn định không.

### Công việc chi tiết:
- [ ] B, C: Chỉnh sửa nhỏ một file (README hoặc nội dung trang).
- [ ] A: Push code, theo dõi CI/CD chạy qua GitHub/GitLab.
- [ ] A: Xác nhận backend/frontend tự động cập nhật.
- [ ] C: Ghi lại từng bước thực hiện vào tài liệu hướng dẫn sử dụng CI/CD.

Dưới đây là phiên bản chi tiết hơn cho **Tuần 5: Kiểm tra CI/CD hoạt động**, theo đúng cấu trúc bạn yêu cầu và đảm bảo dễ hiểu, dễ thực hiện cho cả nhóm, kể cả người không chuyên về code:

* * * * *

📅 **Tuần 5: Kiểm tra CI/CD hoạt động**
---------------------------------------

### 🎯 **Mục tiêu:**

-   Đảm bảo quy trình CI/CD hoạt động trơn tru.

-   Kiểm thử toàn bộ pipeline từ **commit → build → deploy**.

-   Xác minh hệ thống backend và frontend đều được cập nhật tự động.

* * * * *

### 🔧 **Công việc chi tiết:**

* * * * *

### ✅ **1\. B, C: Chỉnh sửa nhỏ một file (README hoặc nội dung trang)**

-   **Mục tiêu**: Kích hoạt quy trình CI/CD bằng một thay đổi đơn giản.

-   **Cách làm**:

    -   Mở file `README.md` hoặc bất kỳ tệp HTML nào trong frontend (ví dụ: `index.html`).

    -   Thêm một dòng ghi chú, ví dụ:

        ```
        # Cập nhật lần kiểm thử CI/CD tuần 5

        ```

    -   Commit với thông điệp: `Test CI/CD Pipeline - Tuần 5`

* * * * *

### ✅ **2\. A: Push code, theo dõi CI/CD chạy qua GitHub/GitLab**

-   **Mục tiêu**: Quan sát quá trình CI/CD sau khi cập nhật mã.

-   **Cách làm**:

    -   Push commit vừa chỉnh sửa lên nhánh chính (`main` hoặc `master`).

        ```
        git add .
        git commit -m "Test CI/CD Pipeline - Tuần 5"
        git push origin main

        ```

    -   Mở tab **Actions (GitHub)** hoặc **CI/CD (GitLab)** để theo dõi trạng thái pipeline:

        -   Build Docker image.

        -   Push image lên Docker Hub.

        -   Deploy lên VPS.

* * * * *

### ✅ **3\. A: Xác nhận backend/frontend tự động cập nhật**

-   **Mục tiêu**: Đảm bảo hệ thống backend và frontend đã cập nhật phiên bản mới.

-   **Cách kiểm tra**:

    -   Truy cập frontend qua trình duyệt: `http://<IP VPS>:<port>`

    -   Kiểm tra nội dung mới (ví dụ dòng mới trong `index.html` hoặc README được render).

    -   Truy cập backend (nếu có giao diện hoặc endpoint) để xác nhận đã khởi động lại container mới.

* * * * *

### ✅ **4\. C: Ghi lại từng bước thực hiện vào tài liệu hướng dẫn sử dụng CI/CD**

-   **Mục tiêu**: Tạo hướng dẫn chi tiết cho các thành viên khác hoặc người mới.

-   **Cách làm**:

    -   Ghi chú lại từng bước:

        -   Chỉnh sửa tệp nào.

        -   Cách commit và push.

        -   Cách theo dõi pipeline chạy.

        -   Cách xác nhận cập nhật thành công.

    -   Lưu vào file `docs/ci-cd-guide.md` hoặc tài liệu chia sẻ chung của nhóm.

    -   Có thể thêm hình ảnh minh họa nếu cần.

* * * * *

### ⏱️ **Thời gian ước tính**:

| Thành viên | Nhiệm vụ | Thời gian |
| --- | --- | --- |
| B, C | Chỉnh sửa và ghi chú nội dung nhỏ | 1 giờ |
| A | Push code, theo dõi CI/CD, xác minh deploy | 1--2 giờ |
| C | Viết tài liệu hướng dẫn | 2 giờ |

* * * * *

---
📘 Hướng Dẫn Sử Dụng Quy Trình CI/CD (Tuần 5)
=============================================

🎯 Mục tiêu
-----------

-   Kiểm thử quy trình CI/CD hoạt động ổn định.

-   Đảm bảo mỗi khi cập nhật mã nguồn, hệ thống sẽ tự động build, push và deploy.

* * * * *

🛠️ Các bước thực hiện
----------------------

### 1\. Chỉnh sửa nội dung nhỏ để kiểm thử (B, C)

-   Mở file `README.md` hoặc file `index.html` trong frontend.

-   Thêm một dòng bất kỳ, ví dụ:

    ```
    <!-- Cập nhật kiểm thử CI/CD tuần 5 -->

    ```

-   Lưu file.

* * * * *

### 2\. Commit và push code lên GitHub (A)

```
# Bước 1: Kiểm tra trạng thái git
$ git status

# Bước 2: Thêm thay đổi vào git
$ git add .

# Bước 3: Commit thay đổi
$ git commit -m "Test CI/CD Pipeline - Tuần 5"

# Bước 4: Push lên GitHub
$ git push origin main

```

* * * * *

### 3\. Theo dõi quá trình CI/CD chạy (A)

-   Truy cập repo trên GitHub.

-   Chọn tab **Actions**.

-   Chọn pipeline mới nhất để xem log:

    -   Build Docker image

    -   Push Docker image lên Docker Hub

    -   Deploy lên VPS qua SSH

📌 Nếu có lỗi, kiểm tra log chi tiết ở từng bước.

* * * * *

### 4\. Kiểm tra backend/frontend đã được cập nhật (A)

-   Mở trình duyệt và truy cập vào địa chỉ VPS:

    ```
    http://<ĐỊA_CHỈ_IP_VPS>

    ```

-   Kiểm tra xem nội dung mới (ví dụ dòng bạn vừa chỉnh trong HTML) đã hiển thị chưa.

📌 Nếu chưa hiển thị, thử clear cache trình duyệt hoặc kiểm tra lại Docker container trên VPS:

```
$ docker ps
$ docker logs <tên_container>

```

* * * * *

### 5\. Ghi chép tài liệu hướng dẫn (C)

-   Tổng hợp lại các bước trên thành hướng dẫn.

-   Lưu dưới dạng file `docs/ci-cd-guide.md` trong repo hoặc chia sẻ nội bộ.

-   Có thể bổ sung ảnh chụp màn hình từ GitHub Actions hoặc giao diện frontend để minh họa rõ ràng hơn.

* * * * *

✅ Kết quả mong đợi
------------------

-   CI/CD chạy tự động khi push mã.

-   Frontend/backend được cập nhật trên VPS không cần thao tác thủ công.

-   Nhóm hiểu rõ quy trình và có thể lặp lại khi cần.

* * * * *

📅 **Thời gian thực hiện**:

| Thành viên | Nhiệm vụ | Ước tính |
| --- | --- | --- |
| B, C | Chỉnh sửa nội dung | 1 giờ |
| A | Push và kiểm tra CI/CD | 1--2 giờ |
| C | Viết tài liệu hướng dẫn | 2 giờ |
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

#### 🎯 Mục tiêu

-   Đưa ứng dụng lên môi trường production có domain + SSL.

#### 1\. Trỏ domain về VPS (A)

-   Đăng nhập vào trang quản lý domain (như Namecheap, GoDaddy...)

-   Tạo bản ghi A (A record) trỏ domain về địa chỉ IP của VPS.

    -   Ví dụ:

        ```
        A record: myapp.example.com → 123.123.123.123

        ```

#### 2\. Cài đặt Nginx làm reverse proxy (B)

```
sudo apt update
sudo apt install nginx -y

```

-   Cấu hình `/etc/nginx/sites-available/default` hoặc tạo file riêng:

```
server {
    listen 80;
    server_name myapp.example.com;

    location / {
        proxy_pass http://localhost:PORT;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
    }
}

```

-   Khởi động lại nginx:

```
sudo systemctl restart nginx

```

#### 3\. Cài đặt SSL miễn phí bằng Let's Encrypt (C)

```
sudo apt install certbot python3-certbot-nginx -y
sudo certbot --nginx -d myapp.example.com

```

-   Làm theo hướng dẫn để cài đặt chứng chỉ SSL.

-   Sau khi hoàn tất, truy cập qua `https://myapp.example.com`.

#### 4\. Kiểm tra lại toàn hệ thống (A, C)

-   Truy cập domain để kiểm tra:

    -   Có chạy được giao diện web không?

    -   Có cảnh báo bảo mật HTTPS không?

-   Kiểm tra lại pipeline CI/CD nếu push code mới:

    -   Ứng dụng có được cập nhật không?

    -   SSL có bị lỗi không?

* * * * *

✅ Kết quả mong đợi
------------------

-   CI/CD chạy tự động khi push mã.

-   Frontend/backend được cập nhật trên VPS không cần thao tác thủ công.

-   Ứng dụng hoạt động ổn định ở domain có SSL.

-   Nhóm hiểu rõ quy trình và có thể triển khai lại bất cứ khi nào.

* * * * *

📅 **Thời gian thực hiện**:

| Tuần | Thành viên | Nhiệm vụ | Ước tính |
| --- | --- | --- | --- |
| Tuần 5 | B, C | Chỉnh sửa nội dung | 1 giờ |
| Tuần 5 | A | Push và kiểm tra CI/CD | 1--2 giờ |
| Tuần 5 | C | Viết tài liệu hướng dẫn | 2 giờ |
| Tuần 6 | A | Trỏ domain về VPS | 1 giờ |
| Tuần 6 | B | Cài đặt Nginx proxy | 1--2 giờ |
| Tuần 6 | C | Cài SSL Let's Encrypt | 1--2 giờ |

---

## 📅 Tuần 7: Giám sát đơn giản

### Mục tiêu:
- Theo dõi ứng dụng có đang chạy không và có cảnh báo khi lỗi.

### Công việc chi tiết:
- [ ] A: Viết bash script hoặc dùng curl để kiểm tra `/health` của backend.
- [ ] A: Dùng cron job chạy kiểm tra định kỳ.
- [ ] A: Thiết lập gửi cảnh báo đơn giản qua Telegram Bot hoặc email nếu lỗi.
- [ ] C: Ghi chú quy trình restart khi ứng dụng lỗi.

Dưới đây là bản **giải thích chi tiết** và rõ ràng hơn cho mục **Giám sát ứng dụng và cảnh báo lỗi**, tách riêng khỏi file CI/CD chính như bạn yêu cầu:

---

## 📡 Giám sát ứng dụng và cảnh báo khi lỗi

### 🎯 Mục tiêu:
- Đảm bảo ứng dụng luôn hoạt động ổn định.
- Khi hệ thống gặp sự cố (backend không phản hồi, container chết), sẽ có cảnh báo ngay lập tức qua Telegram hoặc email.
- Có tài liệu hướng dẫn để khắc phục nhanh.

---

### 🔧 Công việc chi tiết:

---

### ✅ 1. A: Viết bash script kiểm tra `/health` của backend

- **Mục đích**: Kiểm tra xem backend có phản hồi tốt không.
- **Cách làm**:
  Tạo file `check_health.sh`:
  ```bash
  #!/bin/bash

  RESPONSE=$(curl -s -o /dev/null -w "%{http_code}" http://localhost:8000/health)

  if [ "$RESPONSE" != "200" ]; then
    echo "[ERROR] Backend không phản hồi! - $(date)"
    # Gửi cảnh báo tại đây
    /path/to/alert.sh
  else
    echo "[OK] Backend hoạt động bình thường - $(date)"
  fi
  ```
- Nhớ cấp quyền chạy script:
  ```bash
  chmod +x check_health.sh
  ```

---

### ✅ 2. A: Tạo cron job để kiểm tra định kỳ

- **Mục đích**: Chạy script kiểm tra mỗi 5 phút.
- **Cách làm**:
  Mở cron:
  ```bash
  crontab -e
  ```
  Thêm dòng sau:
  ```
  */5 * * * * /full/path/to/check_health.sh >> /var/log/backend_health.log 2>&1
  ```

---

### ✅ 3. A: Thiết lập cảnh báo qua Telegram Bot hoặc Email

#### 🔹 Cảnh báo bằng Telegram Bot (đơn giản)

- Tạo bot qua [@BotFather](https://t.me/BotFather) → lấy token.
- Lấy chat ID bằng cách nhắn tin với bot → dùng API `getUpdates`.
- Tạo file `alert.sh` như sau:
  ```bash
  #!/bin/bash

  TOKEN="YOUR_BOT_TOKEN"
  CHAT_ID="YOUR_CHAT_ID"
  MESSAGE="❌ Backend không phản hồi lúc $(date)"

  curl -s -X POST "https://api.telegram.org/bot$TOKEN/sendMessage" \
       -d "chat_id=$CHAT_ID&text=$MESSAGE"
  ```
  Cấp quyền chạy:
  ```bash
  chmod +x alert.sh
  ```

📌 **Hoặc** dùng lệnh `mail` nếu bạn muốn cảnh báo qua email (cần cấu hình sẵn `mailutils` hoặc `ssmtp`).

---

### ✅ 4. C: Ghi chú quy trình restart khi ứng dụng lỗi

- **Khi có cảnh báo lỗi**, cần có tài liệu hướng dẫn xử lý như sau:

#### 🔹 Restart backend container:
```bash
docker restart backend-container-name
```

#### 🔹 Xem log để chẩn đoán:
```bash
docker logs backend-container-name --tail 50
```

#### 🔹 Nếu cần rebuild:
```bash
docker-compose down
docker-compose up -d --build
```

- Viết hướng dẫn thành file `docs/restart-guide.md` hoặc để trong Notion/Trello nhóm.

---

### 📈 Kết quả mong đợi:
- Hệ thống có khả năng tự phát hiện lỗi backend.
- Gửi cảnh báo nhanh, giúp thành viên phản ứng sớm.
- Có tài liệu hướng dẫn restart dễ hiểu cho cả người không chuyên.

---

Nếu bạn muốn mình tạo file `check_health.sh`, `alert.sh` hoặc cả tài liệu `restart-guide.md`, cứ nói nhé, mình tạo luôn cho tiện ✌️
---

## 📅 Tuần 8: Tổng kết và báo cáo

### Mục tiêu:
- Hoàn thiện hệ thống, tài liệu và demo báo cáo nhóm.

### Công việc chi tiết:
- [ ] B: Viết tài liệu CI/CD backend (file YAML, build, deploy backend).
- [ ] C: Viết tài liệu CI/CD frontend (dockerfile, NGINX, build deploy).
- [ ] A: Vẽ sơ đồ hệ thống CI/CD: Git → CI → Build → Deploy → VPS.
- [ ] C: Chuẩn bị slide báo cáo, demo trực tiếp push → deploy.

Dưới đây là phần giải thích chi tiết cho mục **Hoàn thiện hệ thống, tài liệu và demo báo cáo nhóm**, tách riêng để bạn dễ hiểu và dễ triển khai nè:

---

## 🧾 Hoàn thiện hệ thống & demo báo cáo nhóm

### 🎯 Mục tiêu:
- Hoàn tất toàn bộ tài liệu về CI/CD cho backend và frontend.
- Chuẩn bị slide báo cáo nhóm và demo trực tiếp quy trình CI/CD.
- Thể hiện được nhóm hiểu rõ cách hệ thống hoạt động, có thể tự triển khai lại hoặc cải tiến.

---

### 🔧 Công việc chi tiết:

---

### ✅ 1. B: Viết tài liệu CI/CD cho Backend

- **Tên file**: `docs/backend-cicd.md`
- **Nội dung chính cần trình bày**:
  - Mô tả ngắn về backend (ngôn ngữ, cổng chạy, endpoint `/health`).
  - File `Dockerfile` dùng build backend.
  - File pipeline `.github/workflows/backend.yml` (hoặc GitLab CI).
  - Cấu hình build image, push Docker Hub.
  - Lệnh deploy container lên VPS.
  - Các lưu ý (volume, cổng, log, restart policy...).

📌 Nếu cần, kèm ảnh minh họa hoặc sơ đồ cấu trúc thư mục.

---

### ✅ 2. C: Viết tài liệu CI/CD cho Frontend

- **Tên file**: `docs/frontend-cicd.md`
- **Nội dung nên có**:
  - Mô tả frontend (HTML, CSS, không có framework JS phức tạp).
  - Cấu hình `Dockerfile` dùng NGINX để serve HTML.
  - Cách viết pipeline build + push Docker image.
  - Deploy container chạy trên port 80 hoặc reverse proxy qua NGINX VPS.
  - Các bước kiểm tra sau khi deploy: mở trình duyệt → kiểm tra giao diện.

📌 Có thể bổ sung hướng dẫn trỏ domain vào frontend hoặc SSL nếu có thời gian.

---

### ✅ 3. A: Vẽ sơ đồ hệ thống CI/CD

- **Dụng cụ đề xuất**: [Excalidraw](https://excalidraw.com/), [diagrams.net](https://www.diagrams.net/) hoặc PowerPoint.
- **Nội dung sơ đồ**:
  ```
  [Dev push code] 
        ↓
  [GitHub Actions] / [GitLab CI]
        ↓
  [Build Docker Image]
        ↓
  [Push Docker Image → Docker Hub]
        ↓
  [VPS SSH Pull Image]
        ↓
  [Run Backend / Frontend Container]
  ```
- Có thể tô màu khác nhau cho từng bước: push, CI, build, deploy, run.

📌 Để vào slide hoặc tài liệu tổng hợp.

---

### ✅ 4. C: Chuẩn bị slide báo cáo & demo trực tiếp

- **Slide đề xuất gồm các phần**:
  1. Giới thiệu nhóm & đề tài
  2. Mục tiêu hệ thống CI/CD
  3. Công nghệ sử dụng (GitHub Actions, Docker, NGINX, VPS...)
  4. Quy trình triển khai CI/CD (sơ đồ, ví dụ flow)
  5. Kết quả demo: ảnh chụp, log GitHub Actions, URL demo
  6. Khó khăn - bài học rút ra
  7. Demo trực tiếp: Push code → CI/CD chạy → Kiểm tra site chạy

- **Demo**:
  - Trước buổi báo cáo nên kiểm tra VPS và pipeline lần cuối.
  - Có thể thử sửa dòng nhỏ trên frontend để dễ thấy cập nhật.

---

### ✅ Kết quả mong đợi:
- Mỗi thành viên hiểu rõ phần việc mình đã làm.
- Có tài liệu hoàn chỉnh để lưu trữ và tham khảo lại.
- Slide rõ ràng, trực quan dễ thuyết trình.
- Demo thành công giúp chứng minh nhóm triển khai CI/CD thực tế.

---

Nếu bạn muốn mình tạo sẵn file `backend-cicd.md`, `frontend-cicd.md` hay slide template thì mình làm luôn cho, chỉ cần nói một tiếng 😎

---


