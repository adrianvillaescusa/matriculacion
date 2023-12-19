
  function generarPDF() {
    var formulario = document.getElementById("primero").innerHTML;

    var ventanaImpresion = window.open("", "", "width=800,height=600");
    ventanaImpresion.document.open();
    ventanaImpresion.document.write(`
      <html>
      <head>
        <title>Matrícula Escolar</title>
        <style>
          body {
            font-family: Arial, sans-serif;
          }
        </style>
      </head>
      <body>
        ${formulario}
      </body>
      </html>
    `);
    ventanaImpresion.document.close();
    ventanaImpresion.print();
  }
