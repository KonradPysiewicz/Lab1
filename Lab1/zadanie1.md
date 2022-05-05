Zadanie 1
rozwiązanie pokazuje scr1

Zadanie 2
rozwiązanie pokazuje scr2

Zadanie 3
docker build -t b1 .
docker run -it -p 8080 --name Lab1 b1
docker logs Lab1/docker history Lab1

Zadanie 4
Zadanie wykonywałem na windowsie, wymagało to manualnego zainstalowania qemu
docker buildx create --name testbuilder
docker buildx use testbuilder
docker buildx inspect --bootstrap
docker buildx -t kpysiewicz/lab1:l1 --platform linux/arm/v7,linux/arm64,linux/amd64 --push .

Zadanie dodatkowe 2
Komenda do pobrania obrazu z rejestru:
docker pull registry:2

Komenda do uruchomienia obrazu:
docker run -d -p 6677:5000 --name r1 registry:2

Komenda do pobrania obrazu z ubuntu:
docker pull ubuntu:latest

Komenda do zmiany nazwy obrazu:
docker tag ubuntu:latest localhost:6677/u1

Komenda do uzupełnienia rejestru obrazem
docker push localhost:6677/u1

