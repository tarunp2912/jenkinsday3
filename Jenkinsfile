pipeline{
    agent{
        // using agent machine call by label phpdev 
        label 'phpdev'
    }

    options{
        //Timeout counter start after agent machine is allocated
        timeout(time:60, unit:'SECOND')
    }

    stages{
        stage("CodeCheckout"){
            steps{
                git branch: 'main', url: 'https://github.com/tarunp2912/jenkinsday3.git'
            }
        }

        stage("PHPCodeDeploy"){
            steps{
                sh "sudo cp -r /home/ec2-user/jenkins/workspace/clothstore2/src/clothStore/* /var/www/html/"
            }
        }

        stage(RestartServer){
            steps{
                sh "sudo systemctl restart httpd"
            }
        }
    }
}