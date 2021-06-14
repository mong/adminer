## Administer admin
Easy way of working with AWS EB: [install eb cli](https://github.com/aws/aws-elastic-beanstalk-cli-setup)

### Make EB environment (first time use)
In bash:
```bash
eb init adminer
eb create -r eu-west-1 -i t1.micro --elb-type application adminer
```

### Deploy (every update)
In bash:
```bash
eb deploy adminer
```
