#!/bin/bash
docker container run --rm -v $(pwd):/src -w /src composer update
docker image build -t taskapi .
docker image tag taskapi:latest engiball/taskapi:0.99
docker push engiball/taskapi:0.99