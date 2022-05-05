FROM php

#skopiowanie pliku do obrazu
COPY ./index.php ./

#port nasłuchujący
EXPOSE 8080

#wykonanie komendy włączenia serwera
CMD ["php","-S","0.0.0.0:8080"]

#autor pliku
LABEL maintainer="Konrad Pysiewicz"
