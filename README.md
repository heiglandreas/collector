# Collector

A small minimal server that outputs the retrieved GET, POST and FILES parameters to files.

## Usage

Clone the project and run the container via `docker-compose up`. This will start a webserver listening on port 8099 (by default)
that will output every GET and POST parameter into a file. And sent files are put into a folder per request.
