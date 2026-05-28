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

                sh 'docker run -d --name check-container -p 5001:5000 mdamankhan/check'

            }

        }

    }

}