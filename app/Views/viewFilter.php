<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title|upper}</title>
</head>
<body>
    {body|upper}
    <br>
    {date|date(l dS F Y)}
    <br>
    {date|date(d-m-y)}
    <br>
    {date|date_modify(+15days)|date(d-m-y)}
    <p>{mobile|hidenumber}</p>
    <?php echo base_url(); ?>
</body>
</html>