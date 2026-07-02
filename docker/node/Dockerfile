FROM node:22

RUN apt-get update && apt-get install -y \
    git \
    curl \
    nano \
    && rm -rf /var/lib/apt/lists/*

RUN node --version && npm --version

CMD ["tail", "-f", "/dev/null"]

WORKDIR /workspace