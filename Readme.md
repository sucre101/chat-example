#Exec next command before starting project

1. change directory to app container and write in terminal
    - composer install
    - npm install
2. change directory to node container and write in terminal
    - npm install
3. then add in host file chat-example.loc (127.0.0.1 if you use unix or 192.168.99.100 if you use windows)
4. after change directory to root and run docker-compose up -d

P.S. - you can use make file for exec command docker