@extends('layouts.app')
@section('content')
    <div class="container" style="background-color: white">
        <br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Списком</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 20px; background-color: white" >
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-1">
                         Записи за
                    </div>
                    <div class="col-1">
                         <select size="1" name="hero" class="form-control">
                             <option >январь</option>
                             <option >февраль</option>
                             <option >март</option>
                             <option >апрель</option>
                             <option >май</option>
                             <option >июнь</option>
                             <option >июль</option>
                             <option >август</option>
                             <option >сентябрь</option>
                             <option >октябрь</option>
                             <option >ноябрь</option>
                             <option >декабрь</option>
                         </select>
                    </div>
                    <div class="col-2">
                        <div>
                            <input type="date" class="date_from">
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <input type="date" class="date_to">
                        </div>
                    </div>
                    <div class="col-1">
                        <input type="button"  value="Применить" class="btn-success btn by-date" >
                    </div>
                </div>
            </div>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary add-transaction" data-toggle="modal" data-target="#exampleModal">
                Добавить сапись
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: cornflowerblue">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="decrement-tab" data-toggle="tab" data-target="#decrement" type="button" role="tab" aria-controls="decrement" aria-selected="true">Расход</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="increment-tab" data-toggle="tab" data-target="#increment" type="button" role="tab" aria-controls="increment" aria-selected="false">Доход</button>
                            </li>
                        </ul>
                        <div class="modal-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active decrement-tab" id="decrement" role="tabpanel" aria-labelledby="decrement-tab">
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
                                            <select type="text" class="form-control category-id" style="margin-bottom: 10px">

                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <div><? echo date('l \t\h\e jS')?> </div>
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
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="button" value="Расход" id="target" class="btn btn-success increment target" data-type="increment">
                                </div>

                                <div class="tab-pane fade increment-tab" id="increment" role="tabpanel" aria-labelledby="increment-tab">
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
                                            <select type="text" class="form-control category-id" style="margin-bottom: 10px">

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
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="button" value="Доход" id="target" class="btn btn-success decrement target" data-type="decrement">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal for update -->
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="background-color: azure;">
                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-2">
                                        @lang('main.From_the_account')
                                    </div>
                                    <div class="col-5">
                                        <select class="form-control update-wallet-id">

                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control update-amount" id="amount" name="amount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <label>
                                            @lang('main.Category_')
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <select type="text" class="form-control update-category-id" style="margin-bottom: 10px">

                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <div><? echo date('l \t\h\e jS')?> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control update-comment" id="" placeholder="Примечание">
                                    </div>
                                    <div class="col-6">
                                        <select class="form-control update-type">
                                            <option value="increment">
                                                Доход
                                            </option>
                                            <option value="decrement">
                                                Расход
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>Шаблон</b>
                                    </div>
                                    <div class="col-4">
                                        <b>Расписание</b>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="button" value="обновить" id="target" class="btn btn-success increment target-update" data-type="increment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>
                        <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="homes-tab" data-toggle="tab" data-target="#homes" type="button" role="tab" aria-controls="homes" aria-selected="true">Поиск по дате</button>
                    </li>
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">по счету</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="contacts-tab" data-toggle="tab" data-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">по категории</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="sum-tab" data-toggle="tab" data-target="#sum" type="button" role="tab" aria-controls="sum" aria-selected="false">по сумме</button>--}}
{{--                    </li>--}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show" id="homes" role="tabpanel" aria-labelledby="homes-tab">
                        <div class="dates">
                            <table class="table">
                                <thead>
                                <tr>

                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                            <div class="row">
                                <div class="col-2">
                                     Итого наличных:
                                </div>
                                <div class="col-2 summa">

                                </div>
                            </div>
                        <hr>
                    </div>

{{--                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--                        <div class="wallet">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-2">--}}
{{--                                    Итого наличных:--}}
{{--                                </div>--}}
{{--                                <div class="col-2 summa">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">--}}
{{--                        <div class="category">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-2">--}}
{{--                                    Итого наличных:--}}
{{--                                </div>--}}
{{--                                <div class="col-2 summa">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade " id="sum" role="tabpanel" aria-labelledby="sum-tab">--}}
{{--                        <div class="sum">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-2">--}}
{{--                                    Итого наличных:--}}
{{--                                </div>--}}
{{--                                <div class="col-2 summa">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

<script>

    var type = 'decrement';

    $('.decrement').click(function () {
        type = 'decrement';
    });
    $('.increment').click(function () {
        type = 'increment';
    });
    var updating_transaction_id = 0;
    var user_id = {{\Illuminate\Support\Facades\Auth::id()}}
    $(document).ready ( function () {
        reloadCategories();
        reloadWallets();
        getResentSum();
        $('.dates').on('click', '.update-btn', function () {
           console.log($(this).data('transaction'));
           var transaction = $(this).data('transaction');
            $("#exampleModalUpdate").modal("show");
            $("#exampleModalUpdate .update-category-id").val(transaction.category_id);
            $("#exampleModalUpdate .update-wallet-id").val(transaction.wallet_id);
            $("#exampleModalUpdate .update-comment").val(transaction.comment);
            $("#exampleModalUpdate .update-amount").val(transaction.amount);
            $("#exampleModalUpdate .update-type").val(transaction.type);
            updating_transaction_id = transaction.id;
        });


        $('.by-date').click(function () {
            reloadTransactions();
        });

        $(".target-update").click(function () {
            var type = $(this).data('type');
            $.ajax('/api/update-transaction/' + updating_transaction_id, {
                type: 'POST',  // http method
                data: {
                    wallet_id: $('.update-wallet-id').val(),
                    amount: $('.update-amount').val(),
                    comment: $('.update-comment').val(),
                    category_id: $('.update-category-id').val(),
                    type: $('.update-type').val(),
                },

                success: function (data) {
                    reloadTransactions();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });

        $('.dates').on('click', '.delete-btn', function () {
            var id = $(this).data('id');
            result = confirm('Вы действительно хотите удалить?');
            if (!result){
                return;
            }
            $.ajax('/api/delete-transaction/' + id, {
                type: 'POST',  // http method
                success: function (data) {
                    reloadTransactions();
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            });
        });

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


    });

    function reloadTransactions() {
        $.ajax('/api/transaction-by-date', {
            type: 'GET',  // http method
            data: {
                // user_id: user_id,
                date_from: $('.date_from').val(),
                date_to: $('.date_to').val(),
            },
            success: function (data) {
                console.log(data);
                $('.dates table tbody').html('');
                $('.wallet table tbody').html('');
                $('.category table tbody').html('');
                $('.sum table tbody').html('');
                var transactions = data.transactions;
                for (var i =0; i < transactions.length; i++){
                    var tr = $('<tr>');
                    var td_date = $('<td>').html(transactions[i].created_at);
                    var td_wallet = $('<td>').html(transactions[i].wallet.name);
                    var td_category = $('<td>').html(transactions[i].category.name);
                    var td_sum = $('<td>').html(transactions[i].amount);
                    var td_update = $('<button>')
                        .html('&#9998;')
                        .addClass('update-btn btn btn-info')
                        .data('transaction', data.transactions[i]);
                    var td_delete = $('<button>')
                        .html('&#10006;')
                        .addClass('delete-btn btn btn-warning')
                        .data('id', data.transactions[i].id);
                    tr.append(td_date);
                    tr.append(td_wallet);
                    tr.append(td_category);
                    tr.append(td_sum);
                    tr.append(td_update);
                    tr.append(td_delete);
                    if (transactions[i].type === 'increment') {
                        tr.css('color', 'green');
                    } else {
                        tr.css('color', 'red');
                    }
                    $('.dates table tbody').append(tr);
                    // $('.dates').append(
                    //     $('<button>')
                    //         .html('Обновить')
                    //         .addClass('update-btn btn btn-info')
                    //         .data('transaction', data.transactions[i])
                    // );
                    // $('.dates').append(
                    //         $('<button>')
                    //         .html('Удалить')
                    //         .addClass('delete-btn btn btn-danger')
                    //         .data('id', data.transactions[i].id)
                    // );
                    // $('.wallet').append($('<div>').html(data.transactions[i].wallet.name));
                    // $('.wallet').append($('<div>').html(data.transactions[i].created_at + " -> " + data.transactions[i].category.name));
                    // $('.wallet').append($('<div>').html(data.transactions[i].amount + " -> " + data.transactions[i].type));
                    //
                    // $('.category').append($('<div>').html(data.transactions[i].category.name));
                    // $('.category').append($('<div>').html(data.transactions[i].created_at + " -> " + data.transactions[i].wallet.name));
                    // $('.category').append($('<div>').html(data.transactions[i].amount + " -> " + data.transactions[i].type));
                    //
                    // $('.sum').append($('<div>').html(data.transactions[i].created_at + data.transactions[i].wallet.name +" -> " + data.transactions[i].category.name));
                    // $('.sum').append($('<div>').html(data.transactions[i].amount + " -> " + data.transactions[i].type));
                    console.log(data.transactions[i]);
                }

            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

    function changeClass () {
        $(this).prev().toggleClass('active')
    }

    $(function() {
        $('.box').click(function () {
           $(this).next().slideToggle();
           $(this).toggleClass('active');
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
                $('.update-wallet-id').html('');
                for (var i = 0; i < data.length; i++){
                    $('.wallet-id').append($('<option>').text(data[i].name).val(data[i].id));
                    $('.update-wallet-id').append($('<option>').text(data[i].name).val(data[i].id));
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
                $('.update-category-id').html('');
                for (var i = 0; i < data.length; i++){
                    $('.category-id').append($('<option>').text(data[i].name).val(data[i].id));
                    $('.update-category-id').append($('<option>').text(data[i].name).val(data[i].id));
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
                $('.summa').html(data.sum);
                if (data.sum > 0){
                    $('.summa').css('color', 'green')
                }
                else {
                    $('.summa').css('color', 'red');
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

</script>


@endsection


