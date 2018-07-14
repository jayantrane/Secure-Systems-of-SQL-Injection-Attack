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

# TO  BE CONTINUED...


