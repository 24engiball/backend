#!/bin/bash
docker container run --rm -v $(pwd):/src -w /src composer update
docker image build -t taskapi:0.0.1 .
docker image tag taskapi:latest engiball/taskapi:0.0.1
docker push engiball/taskapi:0.0.1