#Exec next command before starting project

1. change directory to app container and write in terminal
    - composer install
    - npm install
    - npm run dev
2. change directory to node container and write in terminal
    - npm install
3. then add in host file chat-example.loc (127.0.0.1 if you use unix or 192.168.99.100 if you use windows)
4. after change directory to root and run docker-compose up -d

P.S. - you can use make file for exec command docker

#example file .env for ./app
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=
    APP_DEBUG=true
    APP_URL=http://chat-example.loc
    
    LOG_CHANNEL=stack
    
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=larka
    DB_USERNAME=root
    DB_PASSWORD=root
    
    BROADCAST_DRIVER=redis
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120
    
    REDIS_HOST=redis
    REDIS_PASSWORD=null
    REDIS_PORT=6379
    
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    
    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1
    
    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

#example env file for ./
    DOCKER_PREFIX=chat
