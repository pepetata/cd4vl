REM ----------------------------------------------------------------
REM -                                                              -
REM -    Feche esta janela quando terminar de usar o sistema       -
REM -    Acesse pelo browser: localhost:9080                       -
REM -    Pode demorar um pouco para acessar o sistema              -
REM -                                                              -
REM -    Cierre esta ventana cuando terminar de usar el sistema    -
REM -    Acesse pelo browser: localhost:9080                       -
REM -    Puede tomar algunos minutos para poder accesar el sistema -
REM -                                                              -
REM -    Close this window when you are done using this system     -
REM -    Use the browser to acess: localhost:9080                  -
REM -    It can take a few minutes to access the system            -
REM -                                                              -
REM ----------------------------------------------------------------
REM 

REM addin php to the PATH

SET PATH=%PATH%;.\Apache24\php;.\Apache24\php\curl-7.62.0-win64-mingw\bin
explorer "http://localhost:9080"
Apache24\bin\httpd
