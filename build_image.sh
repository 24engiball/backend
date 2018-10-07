#!/bin/bash
docker container run --rm -v $(pwd):/src -w /src composer update
docker image build -t taskapi:0.99 .
docker image tag taskapi:0.99 engiball/taskapi:0.99
docker push engiball/taskapi:0.99