@extends('layouts.app')
@section('content')


<div class="container" style="background-color: white" >
    <div class="row">
        <div class="col-md-6" >
            <ul>@lang('main.balance_')
                <li class="sum">

                </li>
            </ul>
            <ul class="balance">

            </ul>

            <form>
                <input type="text" class="form-control name" style="width: 45%" placeholder="Введите название кошелька">
                <input type="button"  value="@lang('main.Add_')" class="btn-success btn create-wallet" >
            </form>

            <form>
                <input type="text" class="form-control category-name" style="width: 45%" placeholder="Введите название категории">
                <input type="button"  value="@lang('main.Add_')" class="btn-success btn create-category">
            </form>
        </div>

        <div class="col-md-6 " >
            <ul class="nav nav-tabs border border-warning" id="myTab" role="tablist" style="background-color: orange">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Расход</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Перевод</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Доход</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active decrement-tab" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-2">
                            @lang('main.From_the_account')
                        </div>
                        <div class="col-5">
                            <select class="form-control wallet-id">

                            </select>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control amount" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label>
                                @lang('main.Category_')
                            </label>
                        </div>
                        <div class="col-4">
                            <select type="text" class="form-control category-id" style="margin-bottom: 10px;">

                            </select>
                        </div>
                        <div class="col-4">
                            <? echo date('l \t\h\e jS')?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control comment" id="" placeholder="Примечание">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b>Шаблон</b>
                        </div>
                        <div class="col-4">
                            <b>Расписание</b>
                        </div>
                        <div class="col-2">
                            <input type="button" value="Добавить" id="target" class="btn btn-success decrement target" data-type="decrement">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                         </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-2">
                            @lang('main.From_the_account')
                        </div>
                        <div class="col-5">
                            <select class="form-control wallet-id">

                            </select>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control amount" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label>
                                На счет
                            </label>
                        </div>
                        <div class="col-4">
                            <select class="form-control wallet-id" style="margin-bottom: 10px;">

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control comment" id="" placeholder="Примечание">
                        </div>
                        <div class="col-4">
                            <p><? echo date('l \t\h\e jS')?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b>Шаблон</b>
                        </div>
                        <div class="col-4">
                            <b>Расписание</b>
                        </div>
                        <div class="col-2">
                            <input type="button" value="Добавить" id="target" class="btn btn-success">
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade increment-tab" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-2">
                            @lang('main.From_the_account')
                        </div>
                        <div class="col-5">
                            <select class="form-control wallet-id">

                            </select>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control amount" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label>
                                @lang('main.Category_')
                            </label>
                        </div>
                        <div class="col-4">
                            <select type="text" class="form-control category-id" style="margin-bottom: 10px;">

                            </select>
                        </div>
                        <div class="col-4">
                            <p><? echo date('l \t\h\e jS')?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control comment" id="" placeholder="Примечание">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <b>Шаблон</b>
                        </div>
                        <div class="col-4">
                            <b>Расписание</b>
                        </div>
                        <div class="col-2">
                            <input type="button" value="Добавить" id="target" class="btn btn-success increment target" data-type="increment">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="background-color: white">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="homes-tab" data-toggle="tab" data-target="#homes" type="button" role="tab" aria-controls="homes" aria-selected="true"><?php echo date('l \t\h\e jS'); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profiles-tab" data-toggle="tab" data-target="#profiles" type="button" role="tab" aria-controls="profiles" aria-selected="false">Последние изменения</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active one-transactions" id="homes" role="tabpanel" aria-labelledby="homes-tab">
                    1
                </div>
                <div class="tab-pane fade all-transactions" id="profiles" role="tabpanel" aria-labelledby="profiles-tab" >
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">data</th>
                            <th scope="col">wallet</th>
                            <th scope="col">category</th>
                            <th scope="col">sum</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // get-wallet
    var type = 'decrement';

    $('.decrement').click(function () {
        type = 'decrement';
    });
    $('.increment').click(function () {
        type = 'increment';
    });
    var user_id = {{\Illuminate\Support\Facades\Auth::id()}}
    $(document).ready ( function () {
        reloadWallets();
        reloadCategories();
        getResentData();
        getResentSum();
        $(".target").click(function () {
            var type = $(this).data('type');
            $.ajax('/api/create-transaction', {
                type: 'POST',  // http method
                data: {
                    wallet_id: $('.' + type +'-tab .wallet-id').val(),
                    type: type,
                    amount: $('.' + type +'-tab .amount').val(),
                    comment: $('.' + type +'-tab .comment').val(),
                    category_id: $('.' + type +'-tab .category-id').val(),
                },

                success: function (data) {
                    reloadWallets();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });

        $(".create-wallet").click(function () {
            $.ajax('/api/create-wallet', {
                type: 'POST',  // httargettp method
                data: {
                    name: $('.name').val(),
                    user_id: user_id

                },
                success: function (data) {
                    reloadWallets();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });
        $(".create-category").click(function () {
            $.ajax('/api/create-category', {
                type: 'POST',  // http method
                data: {
                    name: $('.category-name').val(),
                },
                success: function (data) {
                    reloadCategories();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });
    });

    function reloadWallets() {
        $.ajax('/api/get-wallet', {
            type: 'GET',  // http method
            data: {
                user_id: user_id,
            },
            success: function (data) {
                $('.wallet-id').html('');
                $('.balance').html('');
                for (var i = 0; i < data.length; i++){
                    $('.wallet-id').append($('<option>').text(data[i].name).val(data[i].id));
                    $('.balance').append($('<li>').html(data[i].name + ': ' + data[i].balance));
                    console.log(data[i]);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

    function reloadCategories() {
        $.ajax('/api/get-category', {
            type: 'GET',  // http method
            success: function (data) {
                $('.category-id').html('');
                for (var i = 0; i < data.length; i++){
                    $('.category-id').append($('<option>').text(data[i].name).val(data[i].id));
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

    function getResentData() {
        $.ajax('/api/get-data', {
            type: 'GET',  // http method
            success: function (data) {
                var transactions = data.transactions;
                for (var i =0; i < transactions.length; i++) {
                    var tr = $('<tr>');
                    var td_date = $('<td>').html(transactions[i].created_at);
                    var td_wallet = $('<td>').html(transactions[i].wallet.name);
                    var td_category = $('<td>').html(transactions[i].category.name);
                    var td_sum = $('<td>').html(transactions[i].amount);
                    tr.append(td_date);
                    tr.append(td_wallet);
                    tr.append(td_category);
                    tr.append(td_sum);
                    if (transactions[i].type === 'increment') {
                        tr.css('color', 'green');
                    } else {
                        tr.css('color', 'red');
                    }
                    $('.all-transactions table tbody').append(tr);
                    // var li = $('<li>').html(transactions[i].created_at + " " + transactions[i].wallet.name + " " + transactions[i].category.name);
                    // $('.all-transactions ul').append(li);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }
    function getResentSum() {
        $.ajax('/api/sum-data?user_id=1', {
            type: 'GET',  // http method
            success: function (data) {
                $('.sum').html(data.sum);
                if (data.sum > 0){
                    $('.sum').css('color', 'green')
                }
                else {
                    $('.sum').css('color', 'red');
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

    // all-data
</script>

@endsection

