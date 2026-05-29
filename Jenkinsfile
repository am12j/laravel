pipeline {

    agent any

    stages {

        stage('Build') {

            steps {

                sh 'docker build -t mdamankhan/check .'

                echo 'Build is successful'

            }

        }

        stage('Deploy') {

            steps {

                sh 'docker stop check-container || true'

                sh 'docker rm check-container || true'

                // 1. Run the container
                sh 'docker run -d --name check-container -p 5001:80 mdamankhan/check'

                // 2. Create the .env file inside the container
                sh 'docker exec check-container cp .env.example .env'

                // 3. Configure the settings inside the .env file
                sh 'docker exec check-container sed -i "s/APP_KEY=/APP_KEY=base64:UdMocEgNKNsyl29F7ehTBmqXHlQ6F5HKQS42a8iIu6w=/g" .env'
                sh 'docker exec check-container sed -i "s/SESSION_DRIVER=database/SESSION_DRIVER=cookie/g" .env'
                sh 'docker exec check-container sed -i "s/CACHE_STORE=database/CACHE_STORE=file/g" .env'
                sh 'docker exec check-container sed -i "s/QUEUE_CONNECTION=database/QUEUE_CONNECTION=sync/g" .env'

                // 4. Clear any cached configuration
                sh 'docker exec check-container php artisan config:clear || true'
                sh 'docker exec check-container php artisan optimize:clear || true'

            }

        }

    }

}