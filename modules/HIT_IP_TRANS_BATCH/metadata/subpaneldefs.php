<?php
$layout_defs['HIT_IP_TRANS_BATCH'] = array ( //��������ģ��
 
    'subpanel_setup' => array (
        'hit_ip_trans_batch_hit_ip_trans' => array (
            'order' => 10,
            'module' => 'HIT_IP_TRANS', //��������ģ��
            'sort_order' => 'asc',
            'sort_by' => 'name',
            'subpanel_name' => 'default', //�����ָ�򲼾��ļ�
            'get_subpanel_data' => 'hit_ip_trans_batch_hit_ip_trans', //���ָ��vardef�ж����Link
            'title_key' => 'LBL_HIT_IP_TRANS_BATCH_HIT_IP_TRANS_TITLE',
            'top_buttons'  => array (
                0 => array('widget_class' => 'SubPanelTopCreateButton'),
               //�����Ҫ���Լ�����ఴť
            ),
        ),
 
     //������ܼ�������subpanel
),
);

?>