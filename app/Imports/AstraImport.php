<?php

namespace App\Imports;

use App\Models\AstraModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AstraImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AstraModel([
            'label' => $row['label'],
            'text' => $row['text'],
            'clean_msg' => $row['clean_msg'],
            'msg_lower' => $row['msg_lower'],
            'token' => $row['token'],
            'spell' => $row['spell'],
            'filter' => $row['filter'],
            'msg_stemmed' => $row['msg_stemmed'],
            'msg_string' => $row['msg_string'],
            'msg_n_gram' => $row['msg_n_gram'],
            'labelNB'    => $row['labelnb'],
        ]);
    }
}
