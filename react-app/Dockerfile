ARG NODE_VERSION=22.14.0-alpine
ARG NGINX_VERSION=alpine3.21

FROM node:${NODE_VERSION} AS builder

WORKDIR /app

COPY --link package.json package-lock.json ./

RUN npm ci

COPY --link . .

RUN npm run build

FROM nginx:alpine

COPY --link nginx.conf /etc/nginx/nginx.conf

COPY --link --from=builder /app/build /usr/share/nginx/html

EXPOSE 3090

ENTRYPOINT ["nginx", "-c", "/etc/nginx/nginx.conf"]
CMD ["-g", "daemon off;"]
