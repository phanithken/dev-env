# the first thing we specify in a Dockerfile is the base image
FROM keymetrics/pm2:latest-alpine

RUN yarn global add pm2@latest

# Install image preview generator tools
RUN apk add --no-cache file
RUN apk --update add imagemagick

# Install fonts
RUN apk --no-cache add msttcorefonts-installer fontconfig && \
 update-ms-fonts && \
 fc-cache -f