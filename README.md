# Secure Systems possessing SQL Injection Vulnerability

## Abstract

Web applications have brought with them new classes of computer security vulnerabilities, such as SQL injection. It is a class of input validation based vulnerabilities. Typical uses of SQL injection leak confidential information from a database, by-pass authentication logic, or add unauthorized accounts to a database.
This security prevents the unauthorized access to your database and also it prevents your data from being altered or deleted by users without the appropriate permissions. Malicious Text Detector, Constraint Validation, Query length validation and Text based Key Generator are the four types of filtration technique used to detect and prevent the SQL Injection Attacks from accessing the database.

## Requirements

1. Web Application
2. One Virtual Server 
3. Test Client
4. Packet Capturing Software

## Implementation
> We are doing this project in Ubuntu

### Step 1: Configuring Apache and Nginx(Proxy) Server

We will be detecting SQL injection on Proxy Server as to increase level of Security. As **Nginx** is *Faster and Easier* to use, we will be using it as proxy server.
Our Web application will be running on **Apache** Server.

So as traffic from browser will be coming to nginx server we will configure its ports

Add ``webproxy`` file from Repository to `/etc/nginx/sites-enabled`.
> Add webproxy to sites-enabled of nginx.
> Here we have routed http traffic through nginx server to port 8080.

Now we will update port of Apache server of Http service.
Update `ports.conf` file from this repository in `/etc/apache2/`
Also update `000-default.conf`file from this repository in `/etc/apache2/sites-enabled`.

### Step 2: Setting up Web Application and database

Replace `html` folder from this repository to `/var/www/` folder.
Run `bank.sql` to create database in mysql.(Crediantials for mysql: username:root password:root)
> Here we have added bank application

### Step 3: Running Apache and Nginx server

```shell
service nginx start
service apache2 start
```
Check whether nginx server is configured on port no. 80 and apache server is configured on port no. 8080.

### Step 4: Doing SQL Injection attack without nginx

Go on to `localhost:8080/bank/login.html`.
Enter username as **aa** and inject password as **a' or 'y'='y**
> Now you can see entire databases.

### Here SQL Vulnerability is shown...

### Step 5: Doing SQL Injection attack with nginx

Go on to `localhost/bank/login.html`.
Enter username as **aa** and inject password as **a' or 'y'='y**
> Now you can't see entire databases and also you can't inject it with any another query.

## Here SQL Vulnerability is fixed...

## So how we did it:

When user credentials are entered in vulnerables system, they are directly passed to database software. But if we provide input validation prior to reaching upto web application such as at proxy server we can reduce the burden on apache server and efficiently process it at *faster* nginx server.

So, I have compiled all mysql keywords used for SQL Injection attack and assigned them weights such that all input is validated and check for attacks. 

As such SQL Injection attack is prevented.


Author and Creator:
Jayant Rane



