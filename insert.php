<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/z3vgqdatingc5w71ak5n5edpy5z6wdmn75hojqa0vbw6yzot/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

    <form method="post" action="insert.php">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodNavn">Produkt navn</label>
                    <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn" placeholder="produkt navn" value="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodPris">Produkt pris</label>
                    <input class="form-control" type="number" step="0.1" name="data[prodPris]" id="prodPris" placeholder="produkt navn" value="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodSort">Produkt sort</label>
                    <input class="form-control" type="text" name="data[prodSort]" id="prodSort" placeholder="Produkt sort" value="" >
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodKategori">Produkt kategori</label>
                    <input class="form-control" type="text" name="data[prodKategori]" id="prodKategori" placeholder="Produkt kategori" value="" >
                </div>
            </div>
            <div class="col-12">
                <label class="form-label" for="prodBillede">Produkt billede</label>
                <input type="file" class="form-control" id="prodBillede" name="prodBillede">
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodBeskrivelse">Produkt beskrivelse</label>
                    <textarea class="form-control" name="data[prodBeskrivelse]" id="prodBeskrivelse"></textarea>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-md-6">
                <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
            </div>
        </div>
    </form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</body>
</html>
