@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            Баланс
            <ul class="balance">

            </ul>
        </div>
        <div class="col-8">
            <form class="finance">
                <div class="row">
                    <div class="col-2">
                        Со счета
                    </div>
                    <div class="col-6">
                        <select class="form-control wallet-id">

                        </select>
                    </div>
                    <div class="col-2">
                        <input type="number" class="form-control amount" id="amount" name="amount">
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-2">--}}
{{--                        Категория--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <select class="form-control">--}}
{{--                            <option>1</option>--}}
{{--                            <option>2</option>--}}
{{--                            <option>3</option>--}}
{{--                            <option>4</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-2">--}}
{{--                        <input type="date" class="form-control" id="date">--}}
{{--                    </div>--}}
{{--                    <div class="col-2">--}}
{{--                        <input type="checkbox">--}}
{{--                        <label>План</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="form-control comment" id="">
                    </div>
                    <div class="col-4">
                        <select class="form-control type">
                            <option value="decrement">Расход</option>
                            <option value="increment">Доход</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="checkbox">
                        <label>Создать шаблон</label>
                    </div>
                    <div class="col-5">
                        <input type="checkbox">
                        <label>Создать расписание</label>
                    </div>
                    <div class="col-3">
                        <input type="button" value="Записать" class=btn-success" id="target">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-4">
            <form>
                <input type="text" class="form-control name">
                <input type="button"  value="Добавить" class="btn-success btn create-wallet">
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    // get-wallet
    var user_id = {{\Illuminate\Support\Facades\Auth::id()}};
    $(document).ready ( function () {
        reloadWallets();

        $("#target").click(function () {
            $.ajax('/api/create-transaction', {
                type: 'POST',  // http method
                data: {
                    wallet_id: $('.wallet-id').val(),
                    type: $('.type').val(),
                    amount: $('.amount').val(),
                    comment: $('.comment').val()
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
                type: 'POST',  // http method
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
                    $('.balance').append($('<li>').html(data[i].name + ': ' + data[i].balance))
                    console.log(data[i]);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

</script>
@endsection

