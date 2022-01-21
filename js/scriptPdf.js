
$(document).ready(function () {
    
    // ici , il s'agit de l'utilisation de la biblitheque jauery , 
    // btn-download est une classe appartenant au bouton sur lequel on clique pour lancer le techargement du pdf : A modifier chew vous 
    $('.activeSmallCircleButtonOne').click((e) => {
         e.preventDefault()
         ExportPdf()
        console.log("llllllll");
    })
    function callExportation(){
        console.log("llllllll");
    }
    function ExportPdf() {
        kendo.drawing
        
            .drawDOM("#contentAll") // container represente l'attribut id de l'element enfant direct du body qui recouvre tout votre cv 
            .then(function (group) {
                // Render the result as a PDF file
                return kendo.drawing.exportPDF(group, {
                    paperSize: "auto",
                    margin: {
                        left: "1cm",
                        top: "1cm",
                        right: "1cm",
                        bottom: "1cm"
                    }
                });
            })
            .done(function (dataURI) {
                // Save the PDF file
                kendo.saveAs({
                    dataURI: dataURI,
                    fileName: "document.pdf",
                    proxyURL: "https://demos.telerik.com/kendo-ui/service/export"
                });
    
            });
    
            console.log('11111');
    }
    
    });