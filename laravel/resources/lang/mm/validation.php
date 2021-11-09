<?php
return ['required' => 'ကိုထည့်ပေးပါ','numeric'=>'သည်စာမဖြင့်ရ နံပါတ် ပဲဖြစ်ရပါမည်','max'=> [
    'numeric' => 'သည်အများဆုံး :max ပဲဖြစ်ရမည်',
    'file'    => '\'သည်အများဆုံး အလုံး:max ပဲဖြစ်ရမည်\'',
    'string'  => '\'သည်အများဆုံး အလုံး:max ပဲဖြစ်ရမည်\'',
    'array'   => '\'သည်အများဆုံး အလုံး:max ပဲဖြစ်ရမည်\'',
],'min'=>[
    'numeric' => 'သည်အနည်းဆုံး :min ဖြစ်ရမည်',
    'file'    => 'The :attribute must be at least :min kilobytes.',
    'string'  => 'သည်အနည်းဆုံး :min လုံး ဖြစ်ရမည်',
    'array'   => 'The :attribute must have at least :min items.',
],'mimes'=>'ဟာဓါတ်ပုံ ပဲဲဖြစ်ရပါမည်။formats(:values)'];
