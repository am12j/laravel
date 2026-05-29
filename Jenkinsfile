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

                sh 'docker run -d --name check-container -p 5001:80 -e APP_KEY=base64:jW9uLzN4QkZ5M1c4bDRzN3A2eDlvMnZhNWRlZg== -e SESSION_DRIVER=cookie mdamankhan/check'

            }

        }

    }

}