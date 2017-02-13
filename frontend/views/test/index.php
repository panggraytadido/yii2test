<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>

<script>
    $(document).ready(function() {      
    
    
    $('#example').DataTable( {
        ajax: {
        url: '<?php echo Yii::$app->request->baseUrl."/test/fetch-data" ?>',
        dataSrc: 'data'
        },          
            columns: [
            { data: null },
            { data: 'barangid' },
            { data: 'divisiid' },
            { data: 'pelangganid' },
            { data: 'tanggal' },
            
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<button>View</button>'
            },
            {
                "className":      'update-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<button>Update</button>'
            },
            {
                "className":      'delete-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<button>Delete</button>'
            },
            //{defaultContent: "<button>Click!</button>"}
          
        ],
        order: [[ 1, 'asc' ]]
      
    } );
    
    } );
</script>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">                     
            <div class="ibox float-e-margins">
                <div class="ibox-content">                         
                    <table id="example" class="stripe hover">
				<thead>
					<tr>
                                                <th>No</th>
						<th>Barang</th>
						<th>Divisi</th>
						<th>Pelanggan</th>
						<th>Tanggal</th>
                                                <th></th>                
                                                <th></th>
                                                <th></th>
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
