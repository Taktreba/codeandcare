<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Coindesk;
use App\Blockchain;
use Illuminate\Support\Facades\Log;


class PullCoinValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull:coinValue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is console command pull Coin values from site and push to BD ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $start = microtime(true); // запустить счетчик отработки скрипта

        $coindesk = json_decode(file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json"), true); // получаем массивы данных с сайтов
        $blockchain = json_decode(file_get_contents("https://blockchain.info/ticker"), true);

        function tofloat($num) // функция бля того что бы сделать нормальныое флоат число 7,125.23 = 7125.23 я сделал свою функцию, но потом нагуглил эту и вставил себе в код
        {
            $dotPos = strrpos($num, '.');
            $commaPos = strrpos($num, ',');
            $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
                ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

            if (!$sep) {
                return floatval(preg_replace("/[^0-9]/", "", $num));
            }

            return floatval(
                preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
                preg_replace("/[^0-9]/", "", substr($num, $sep + 1, strlen($num)))
            );
        }

        $coindeskUSARait = tofloat(substr($coindesk['bpi']['USD']['rate'], 0, 8));  // достаем стоимость одного койна их coindesk'a
        $coindeskGBPRait = tofloat(substr($coindesk['bpi']['GBP']['rate'], 0, 8));
        $coindeskEURRait = tofloat(substr($coindesk['bpi']['EUR']['rate'], 0, 8));


        $coindesmMODEL = new Coindesk();

        $coindesmMODEL->USD = $coindeskUSARait;
        $coindesmMODEL->GBP = $coindeskGBPRait;
        $coindesmMODEL->EUR = $coindeskEURRait;

        $coindesmMODEL->save(); // сохраняем в БД


        $blockchainUSD = $blockchain['USD']['15m']; // достаем стоимость одного койна их blockchain'a
        $blockchainGBP = $blockchain['GBP']['15m'];
        $blockchainEUR = $blockchain['EUR']['15m'];

        $blockchainModel = new Blockchain();

        $blockchainModel->USD = $blockchainUSD;
        $blockchainModel->GBP = $blockchainGBP;
        $blockchainModel->EUR = $blockchainEUR;

        $blockchainModel->save(); // сохраняем в БД


        Log::info('Time start command: ' . date('Y-m-d H:i:s') . ' Provider \'coindesk\' and \'blockchain\', execution time of the script: ' . (microtime(true) - $start) . ' second.');  // сохраняем информацию в лог
        echo 'You Coin values save in DB \'code&care\''; // выводим сообщение в консоль об успешной операции, и идем пить чаЙОк
    }
}
