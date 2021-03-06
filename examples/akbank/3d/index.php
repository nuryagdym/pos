<?php

require '_config.php';

require '../../template/_header.php';

$url = $baseUrl.'form.php';
?>

    <form method="post" action="<?= $url; ?>" role="form">
        <div class="row">
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="name">Card holder name</label>
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Card holder name"
                       value="John Doe">
            </div>
            <div class="form-group col-sm-3">
                <label for="type">Card Type</label>
                <select name="type" id="type" class="form-control input-lg">
                    <option value="">Type</option>
                    <option value="visa" selected>Visa</option>
                    <option value="master">MasterCard</option>
                </select>
            </div>
            <div class="form-group col-sm-9">
                <label for="number">Card Number</label>
                <input type="text" name="number" id="number" class="form-control input-lg"
                       placeholder="Credit card number" value="4355084355084358">
            </div>
            <div class="form-group col-sm-4">
                <label for="month">Expire Month</label>
                <select name="month" id="month" class="form-control input-lg">
                    <option value="">Month</option>
                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?= $i; ?>"><?= str_pad($i, 2, 0, STR_PAD_LEFT); ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="year">Expire Year</label>
                <select name="year" id="year" class="form-control input-lg">
                    <option value="">Year</option>
                    <?php for ($i = date('y'); $i <= date('y') + 20; $i++) : ?>
                        <option value="<?= $i; ?>"><?= 2000 + $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="cvv">Cvv</label>
                <input type="text" name="cvv" id="cvv" class="form-control input-lg" placeholder="Cvv" value="000">
            </div>
        </div>
        <hr>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-lg btn-block btn-success">Payment</button>
        </div>
    </form>

<?php require '../../template/_footer.php';
