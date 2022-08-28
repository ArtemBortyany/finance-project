@extends('layouts.app')
@section('content')

<div class="container" style="background-color: white">
    <div class="row">
        <div class="col-6">
            <h4>У вас стартовая версия</h4>
            <p>Она бесплатна, включает до 12 категорий (у вас 10), 3 счета (у вас 3), 1 валюту (у вас 1)</p>
        </div>
        <div class="col-6">
            <h4>Премиум-версия</h4>
            <p>75 ₴ в месяц или 675 ₴ в год, число категорий, счетов и валют не ограничено, без рекламы, с планированием бюджета, импортом данных, с приложениями для iPhone и Android</p>
            <input type="button"  value="Купить" class="btn-success btn">
        </div>
    </div>
    <div>
        <form>
            <input type="text" class="form-control name" style="width: 45%" placeholder="Введите название кошелька">
            <input type="button"  value="@lang('main.Add_')" class="btn-success btn create-wallet" >
        </form>
    </div>
    <a href="#" id="hide" onclick="return false">Свернуть все</a>
    <a href="#" id="show" style="display: none" onclick="return false">Развернуть все</a>

    <div class="WalletBalance" id="comments">
        <div style="float: left">
            Наличные
        </div>
        <div style="float: right" class="sum">

        </div>
        <table class="table">
            <thead>
            <tr>

            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>




<script type="text/javascript">

    var user_id = {{\Illuminate\Support\Facades\Auth::id()}}
    $(document).ready ( function () {
        reloadWallets();
        getResentSum();

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
    });
    function reloadWallets() {
        $.ajax('/api/get-wallet', {
            type: 'GET',  // http method
            data: {
                user_id: user_id,
            },
            success: function (data) {
                for (var i = 0; i < data.length; i++){
                    var tr = $('<tr>');
                    var td_name = $('<td>').html(data[i].name);
                    var td_balance = $('<td>').html(data[i].balance);
                    tr.append(td_name);
                    tr.append(td_balance);
                    $('.WalletBalance table tbody').append(tr);
                    // $('.WalletBalance').append($('<td>').html(data[i].name + ': ' + data[i].balance));
                    console.log(data[i]);
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
            }
        });
    }

    function hideComments() {
        $("#comments").fadeOut(1000, function () {
            $("#hide").hide();
            $("#show").show();
        });
    }

    function showComments() {
        $("#comments").fadeIn(1000, function () {
            $("#hide").show();
            $("#show").hide();
        });
    }

    $(document).ready(function () {
        $('#hide').bind('click', hideComments);
        $('#show').bind('click', showComments);
    });

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

</script>
@endsection


