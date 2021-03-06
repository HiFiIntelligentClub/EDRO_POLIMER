#!/usr/bin/php
<?php                                                                              
/*                                                                                 
© A.A.CheckMaRev 2020 assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]      
//////|                                                                            
|_|//|/ /\      Бегемот.(ЕДРО:ПОЛИМЕР.020.Синтез)
  //|/<  **> -------------------->                                                                      
 //|/   Jl ----------------->                                                                        
//////| --------------->                                                           
||||||/                                                                            
Благословенный стиль Упрощающий Проверку и Чтение Программы Благословенный.УПИиЧ*/
//Style.search.[StyleName].unordered
//			.search
//Style.search.[StyleName].unordered.Codec.search.[CodecName].unordered
//			.search				   .search
//Style.search.[StyleName].unordered.Bitrate.search.[BitrateName].unordered
//			.search					.search
//Style.search.[StyleName].unordered.Codec.search.[CodecName].unordered.Bitrate.search.[BitrateName].unordered
//			.search		                   .search                                .search
//Codec.search.[CodecName].unordered
//			.search
//Codec.search.[CodecName].unordered.Bitrate.search.[BitrateName].unordered
//			.search					.search
//Bitrate.search.[BitrateName].unordered
//			    .search

$_SERVER['REQUEST_URI']='/';

require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');
//require_once('/home/EDRO.SetOfTools/System/3.Buffer/0.EDRO_Loader.php');
require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');
$сРасположОбъект	='/home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';
//echo '/home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';
//exec('mkdir -p /home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект');


/*echo'Загруз:Фраза.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/НаборЭлементов/Фраза/Фраза.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:Фраза->загрузил модуль.'."\n";*/

echo'Загруз:ЗагрузЭлемент.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Элемент/ЗагрузитьЭлемент.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузЭлемент->загрузил модуль.'."\n";

/*echo'Загруз:ЗагрузСписок.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Список/ЗагрузитьСписок.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузСписок->загрузил модуль.'."\n";*/

echo'Загруз:РасположениеКоличество.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Список/РасположениеКоличество.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеКоличество->загрузил модуль.'."\n";

echo'Загруз:РасположениеСоздать.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';
$сРасположDestination	='/Диск';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Элемент/РасположениеСоздать.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеСоздать->загрузил модуль.'."\n";

require_once('/home/EDRO/4.Objects/Read/Cloud/Disk/MyXML.php');

Синтез::_Старт();
class Синтез
	{
	private		$мСписокОбъектовДляОбработки	=array();
	private		$мСписокОбработанныхОбъектов	=array();
	private		$strLocationStationsPrime	='';

	private		$мСписокОбъектов;
	private		$мСтанцияЧист;
	private		$сЗаписываемыйОбъект;

	private		$сТипОперации		='Чтение_Диск';
	private		$сГлавнаяПапка		='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных';
	private		$сБазаДанных		='HiFiIntelligentClub';
	private		$сТаблица		='Stations';
	private		$мТипХранения		=array('unordered','search');
	private		$ч0ТекущаяСтрока	=0;
	private		$сТекущаяСтрока		='';
	private		$сТекущаяСтрокаИД	='';
	private		$сИмяТекущегОбъекта	='';
	private		$сТекущееУстройство	='';
	private		$мРасположКолВо		=array();
	private		$arrAndroidCodec	=array('mp3', 'mpeg', 'ogg', 'opus', 'vorbis');
	private		$arrAppleCodec		=array('aac', 'aacp', 'flac', 'mp3', 'mpeg');
	private		$arrICQRType		=
				array(
				'mp3'=>	
					array(
					'Low quality'	=>'0_192',
					'HiFi beginner'	=>'192_323',
				//	'HiFi lover'	=>false,
				//	'HiFi Top'	=>false,
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'mpeg'=>	
					array(
					'Low quality'	=>'0_192',
					'HiFi beginner'	=>'192_323',
				//	'HiFi lover'	=>false,
				//	'HiFi Top'	=>false,
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'aac'=>	
					array(
					'Low quality'	=>'0_96',
					'HiFi beginner'	=>'96_192',
					'HiFi lover'	=>'192_1024',
					'HiFi Top'	=>'1024_2056',
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'aacp'=>	
					array(
					'Low quality'	=>'0_96',
					'HiFi beginner'	=>'96_192',
					'HiFi lover'	=>'192_1024',
					'HiFi Top'	=>'1024_2048',
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'ogg'	=>
					array(
					'Low quality'	=>'0_160',
					'HiFi beginner'	=>'160_512',
					'HiFi lover'	=>'512_1024',
					'HiFi Top'	=>'1024_4096',
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'opus'	=>
					array(
					'Low quality'	=>'0_160',
					'HiFi beginner'	=>'160_512',
					'HiFi lover'	=>'512_1024',
					'HiFi Top'	=>'1024_4096',
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'vorbis'=>
					array(
					'Low quality'	=>'0_160',
					'HiFi beginner'	=>'160_512',
					'HiFi lover'	=>'512_1024',
					'HiFi Top'	=>'1024_4096',
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				'flac'=>
					array(
				//	 'Low quality'	=>false,
				//	'HiFi beginner'	=>false,
					'HiFi lover'	=>'0_4000',
				//	'HiFi Top'	=>false,
				//	'2.1'		=>false,
				//	'5.1'		=>false,
				//	'7.1'		=>false,
					),
				);


	public function __construct()
		{
		echo 'Очистить БД'."\n";
		//$this->_ОчиститьБазуДанных();
		echo 'Создать БД'."\n";
		$this->_СоздатьБазуДнных();
		echo 'Обновить список станций'."\n";
		$this->_ОбновитьСписок();
		echo 'Загрузить список станций в оперативную память'."\n";
		$this->мСписокОбъектов		=$this->мПрочитатьСписокОбъектов();
		echo 'Создть Базу Данных ЕДРО:ПОЛИМЕР ИВ'."\n";
		$this->_CreateStructure($this->сГлавнаяПапка.'/'.$this->сБазаДанных);
		echo 'Фаза1.='."\n";
		}

	private function strCreatePrimaryIndex($мОбрабатываемыйОбъект)
		{
		$this->сТекущаяСтрокаИД			=$мОбрабатываемыйОбъект['id'];
		$сРасположЗаписываемыйОбъект		=$this->strLocationStationsPrime.'/'.$мОбрабатываемыйОбъект['id'].'.plmr';
		
		if(is_file($сРасположЗаписываемыйОбъект)===TRUE)
			{
			}
		else
			{
			if(file_put_contents($сРасположЗаписываемыйОбъект, strMyJson($мОбрабатываемыйОбъект))===FALSE)
				{
				_Report('Primary index write error:'.$сРасположЗаписываемыйОбъект);
				echo 'errr';
				exit;
				}
			else
				{
				return		$сРасположЗаписываемыйОбъект;
				}
			}
		}
	private function _CreateFullTextIndex($strLocationSearch)
		{
		$сЗаписываемыйОбъектРасполож		=РасположениеСоздать::с($strLocationSearch.'/'.$this->мТекущаяСтрока['мОбъект']['server_name_short'], 'unordered');
		$this->_СоздатьСсылку($сЗаписываемыйОбъектРасполож);
		}
	private function _СоздатьСсылку($_сЗаписываемыйОбъектРасполож)
		{
		$сОбрабатываемыйОбъект		=$this->мТекущаяСтрока['сПервичРасполож'];
		$сЗаписываемыйОбъектРасполож	=$_сЗаписываемыйОбъектРасполож;

		$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';

		if(symlink($сОбрабатываемыйОбъект, $сЗаписываемыйОбъект))
			{
			if(file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', strMyJson(array('int1Total'=>($ч1РасположениеКоличество+1))))===FALSE)
				{
				_Report('Error creating total!'.$сЗаписываемыйОбъектРасполож.'/total.plmr');
				}
			else
				{
				}
			}
		else
			{
			_Report('Error creating link!'.$сОбрабатываемыйОбъект.'->'.$сЗаписываемыйОбъект);
			}
		}
	private function _AddJoinedTableBelongs($strLocationJoinedTable, $сНазвание,   $мПрисоед)
		{
		if(!is_dir($strLocationJoinedTable.'/'.$сНазвание))
			{
			mkdir($strLocationJoinedTable.'/'.$сНазвание);
			}
		if(is_array($мПрисоед))
			{
			if(file_put_contents($strLocationJoinedTable.'/'.$сНазвание.'/'.$this->мТекущаяСтрока['мОбъект']['id'].'.plmr', strMyJson($мПрисоед))===FALSE)
				{
				_Report('Error creating belong_index!'.$strLocationJoinedTable.'/'.$сНазвание.'/'.$this->мТекущаяСтрока['мОбъект']['id'].'.plmr');
				}
			else
				{
				}
			}
		}
	private function _AddJoinedTableHasMany($strLocationJoinedTable, $сНазвание,  $мПрисоед)
		{
		if(!is_dir($strLocationJoinedTable.'/'.$сНазвание))
			{
			mkdir($strLocationJoinedTable.'/'.$сНазвание);
			}
		if(is_array($мПрисоед))
			{
			$сРасполож	=$strLocationJoinedTable.'/'.$сНазвание.'/'.$this->мТекущаяСтрока['мОбъект']['id'];
			if(is_dir($сРасполож.'/unordered'))
				{
				$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сРасполож.'/unordered');
				if(file_put_contents($сРасполож.'/unordered/'.$ч1РасположениеКоличество.'.plmr', strMyJson($мПрисоед))===FALSE)
					{
					_Report('Error creating base! '.$сРасполож.'/unordered/'.$ч1РасположениеКоличество.'.plmr');
					}
				else
					{
					if(file_put_contents($сРасполож.'/unordered/total.plmr', strMyJson(array('int1Total'=>($ч1РасположениеКоличество+1))))===FALSE)
						{
						_Report('Error creating total: '.$сРасполож.'/unordered/total.plmr');
						}
					}
				}
			else
				{
				РасположениеСоздать::с($сРасполож, 'unordered');
				$this->_AddJoinedTableHasMany($strLocationJoinedTable, $сНазвание,  $мПрисоед);
				}
			}
		}
	private function  _CreateTagPack($_strBasePath, $arrGenre)
		{
		if(!is_dir($_strBasePath))
			{
			if(mkdir($_strBasePath))
				{
				}
			else
				{
				_Report('Cant create '.$_strBasePath);
				}
			}
			$strBasePath	=$_strBasePath;

		foreach($arrGenre as $strStyle)
			{
			$s1= $this->strCreateTag($strBasePath.'/Genres', $strStyle);
			    $s2	 = $this->strCreateTag($s1.'/ICQRType', $this->мТекущаяСтрока['мОбъект']['strICQR_Q']);
			    //$s2	 = $this->strCreateTag($s1.'/Codecs', $мСтанцияЧист['server_type'], $мСтанцияЧист['server_name']);
			    //$s2_1= $this->strCreateTag($s1.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
				//    $s3= $this->strCreateTag($s2.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
			$b1= $this->strCreateTag($strBasePath.'/ICQRType', $this->мТекущаяСтрока['мОбъект']['strICQR_Q']);
			//$c1= $this->strCreateTag($strBasePath.'/Codecs', $мСтанцияЧист['server_type'], $мСтанцияЧист['sever_name']);
			//    $c2= $this->strCreateTag($c1.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
			}
		}
	private function  strCreateTag($_strPath, $_strTag)
		{
		//echo $_strPath;
		//echo "\n";
		//$this->_CreateFullTextIndex($_strPath,	'search');
		$s1=РасположениеСоздать::с($_strPath,	'search');
		$s2=РасположениеСоздать::с($s1.'/'.$_strTag, 'unordered');
		$this->_СоздатьСсылку($s2);
		$s3 =РасположениеСоздать::с($s1.'/'.$_strTag, 'search');
		$s4 =РасположениеСоздать::с($s3.'/'.$this->мТекущаяСтрока['мОбъект']['server_name_short'], 'unordered');
		$this->_СоздатьСсылку($s4);
		return $s2;
		}

	private function _CreateStructure($strTagLevel)
		{
		echo 'Создаём БД'."\n";
		$strBasePath			=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица;
		$this->strLocationStationsPrime	=РасположениеСоздать::с($strBasePath,	'prime');
		//$strLocationStationsSearch	=РасположениеСоздать::с($strBasePath,	'search');
		//$strLocationStationsUnordered	=РасположениеСоздать::с($strBasePath,	'unordered');
		$strLocationStationsBelongs	=РасположениеСоздать::с($strBasePath,	'belongs');
		$strLocationStationsHasMany	=РасположениеСоздать::с($strBasePath,	'hasmany');
		$strLocationStationsHistory	=РасположениеСоздать::с($strBasePath,	'History');
		//$strLocationStationsGenres	=РасположениеСоздать::с($this->сГлавнаяПапка.'/'.$this->сБазаДанных,	'Genres');
		//$strLocationStationsICQRType	=РасположениеСоздать::с($this->сГлавнаяПапка.'/'.$this->сБазаДанных,	'ICQRType');
		$мОбрСтан			=array();
		$ч0Х				=0;
		foreach($this->мСписокОбъектов as $мСтанцияЧист)
			{
			$мСтильДляЧел			=array();
			$мСтильДляРасполож		=array();
			$strListenUrl				=trim(strSafeUsers($мСтанцияЧист['listen_url']));
			//$мСтанцияЧистS['id']			=сПреобразовать($strListenUrl, 	"вКоманду");
			$мСтанцияЧистS['id']			=сКодировать($strListenUrl, 'к');
			$мСтанцияЧистS['server_name']		=trim(strSafeUsers($мСтанцияЧист['server_name']));
			$мСтанцияЧистS['server_name']		=(string)сПреобразовать($мСтанцияЧистS['server_name'], 			"вКоманду");
			if(isset($мСтанцияЧистS['server_name'][253])&&$мСтанцияЧистS['server_name'][253]=='о')
				{
				$int0MaxNameLength		=252;
				$мСтанцияЧистS['server_name_short']	=substr($мСтанцияЧистS['server_name'],0, $int0MaxNameLength);
				}
			if(isset($мСтанцияЧистS['server_name'][252])&&$мСтанцияЧистS['server_name'][252]=='о')
				{
				$int0MaxNameLength		=251;
				$мСтанцияЧистS['server_name_short']	=substr($мСтанцияЧистS['server_name'],0, $int0MaxNameLength);
				}
			if(isset($мСтанцияЧистS['server_name'][251])&&$мСтанцияЧистS['server_name'][251]=='о')
				{
				$int0MaxNameLength		=250;
				$мСтанцияЧистS['server_name_short']	=substr($мСтанцияЧистS['server_name'],0, $int0MaxNameLength);
				}
			if(isset($мСтанцияЧистS['server_name'][250])&&$мСтанцияЧистS['server_name'][250]=='о')
				{
				$int0MaxNameLength		=249;
				$мСтанцияЧистS['server_name_short']	=substr($мСтанцияЧистS['server_name'],0, $int0MaxNameLength);
				}
			if(strlen($мСтанцияЧистS['server_name'])<=249)
				{
				$мСтанцияЧистS['server_name_short']	=$мСтанцияЧистS['server_name'];
				}
			$strGenre				=trim(cФразыСтиль_ИсправитьНаписание(strSafeUsers(str_replace(array( '(',')' ), '', $мСтанцияЧист['genre']))));
			$мСтанцияЧистS['server_type']		=trim(strSafeUsers(strtolower(str_replace(array("/", " ", "audio", "application", "ogg:codecs=", "ogg: codecs="), '', $мСтанцияЧист['server_type']))));
			$мСтанцияЧистS['server_type']		=сПреобразовать($мСтанцияЧистS['server_type'], 			"вКоманду");



			$мСтанцияЧистS['bitrate']		=(integer)trim(strSafeUsers($мСтанцияЧист['bitrate']));

									     unset($мСтанцияЧист);
			$мСтанцияЧист				=$мСтанцияЧистS;
							   unset($мСтанцияЧистS);

			$мСтильДляЧел				=мСобратьФразы($strGenre, 			'НеТрог');
			$мСтильДляРасполож			=мСобратьФразы($strGenre, 			'МалДиректор');
			//						 unset($strGenre);
		

			if(empty($мСтанцияЧист['id']))
				{
				_Report('empty: $мСтанцияЧист[listen_url]'.$мСтанцияЧист['server_name'].'||'.$мСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if($мСтанцияЧист['id']=="")
				{
				_Report('$мСтанцияЧист[listen_url]==""'.$мСтанцияЧист['server_name'].'||'.$моСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(strpos($мСтанцияЧист['server_type'], 'video')!==FALSE)
				{
				_Report('strpos($мСтанцияЧистЧист[server_type], video)!==FALSE'.$мСтанцияЧист['server_name'].'||'.$мСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(strpos($мСтанцияЧист['server_type'], 'usac')!==FALSE)
				{
				_Report('usac: '.$мСтанцияЧист['server_name'].'##'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);

				continue;
				}
			if(in_array($мСтанцияЧист['server_type'], $this->arrAndroidCodec)===FALSE||
			    in_array($мСтанцияЧист['server_type'], $this->arrAppleCodec)===FALSE)
				{
				_Report("\n".'Кодек не входит в сетап: '.$мСтанцияЧист['server_type'].'##'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(фДубль($мОбрСтан,$мСтанцияЧист, $strGenre)===TRUE)
				{
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
			foreach($this->arrAndroidCodec as $strAndroidCodec)							///
				{												///
				if($мСтанцияЧист['server_type']==$strAndroidCodec)						///
					{											///
					$мПлатформа[]		='Android';					///
					}											///
				}												///
			foreach($this->arrAppleCodec as $strAppleCodec)								///
				{												///
				if($мСтанцияЧист['server_type']==$strAppleCodec)						///
					{											///
					$мПлатформа[]		='Apple';					///
					}											///
				}												///
			foreach($this->arrICQRType[$мСтанцияЧист['server_type']] as $strICQRName=>$strInterval)			///
				{												///
				$arrInterval=explode('_', $strInterval);							///
				if($arrInterval[0]<=$мСтанцияЧист['bitrate']&&$мСтанцияЧист['bitrate']<$arrInterval[1])		///
					{											///
					$мСтанцияЧист['strICQR_Q']=$strICQRName;						///
					}											///
				}
			if(!isset($мСтанцияЧист['strICQR_Q']))
				{
				print_r($мСтанцияЧист);
				}												///
			if(empty($мСтанцияЧист['strICQR_Q']))
				{
				print_r($мСтанцияЧист);
				}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//print_r($мСтанцияЧист);
			//if(фCreateListen_lnSock($мСтанцияЧистЧист['listen_url'])!==TRUE)
			//	{
			//	_Report('фCreateListen_lnSock($мСтанцияЧистЧист['listen_ur']l)===TRUE'.$мСтанцияЧистЧист['server_name'].'||'.$мСтанцияЧистЧист['listen_url'].'||'.$мСтанцияЧистODЧист['genre']);
			//	continue;
			//	}
			$this->мТекущаяСтрока['сПервичРасполож']	=$this->strCreatePrimaryIndex($мСтанцияЧист);
			$this->мТекущаяСтрока['мОбъект']		=$мСтанцияЧист;
			//print_r($this->мТекущаяСтрока['мОбъект']);
			//$this->_СоздатьСсылку($strLocationStationsUnordered);
			//$this->_CreateFullTextIndex($strLocationStationsSearch);
			$this->_AddJoinedTableBelongs($strLocationStationsBelongs, 'Genres', $мСтильДляЧел);
			$this->_AddJoinedTableBelongs($strLocationStationsBelongs, 'Genres_control', $мСтильДляРасполож);
			//$this->_AddJoinedTableBelongs($strLocationStationsICQR,		array());
			$this->_AddJoinedTableHasMany($strLocationStationsHistory, 'History',	array('strEvent'=>'Updating', 'strEventDate'=>date('Y-m-d H:i:s')));
			/*$this->_CreateTagPack($this->сГлавнаяПапка.'/'.$this->сБазаДанных, $мСтильДляРасполож);
			foreach($мПлатформа as $strPlatform)
				{
				if(!is_dir($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform))
					{
					mkdir($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform);
					}
				if(!is_dir($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform.'/'.$this->сТаблица))
					{
					mkdir($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform.'/'.$this->сТаблица);
					}
				$strPlatformSearch		=РасположениеСоздать::с($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform.'/'.$this->сТаблица,	'search');
				$strPlatformUnordered	=РасположениеСоздать::с($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform.'/'.$this->сТаблица,	'unordered');
				$this->_СоздатьСсылку($strPlatformUnordered);
				$this->_CreateFullTextIndex($strPlatformSearch);
				$this->_CreateTagPack($this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$strPlatform, $мСтильДляРасполож);
				}*/
			$this->ч0ТекущаяСтрока++;
			$ч0Х++;
			$мОбрСтан[]	=
				array(
				'id'	=>$мСтанцияЧист['id'],
				'name'	=>$мСтанцияЧист['server_name'],
				'genre'	=>$strGenre
				);
			unset($мПлатформа);
			}
		}
	public static function _Старт()
		{
		$оСинтез =new Синтез();
		}
	private function _ОчиститьБазуДанных()
		{
		exec('rm -r -f '.$this->сГлавнаяПапка.'/'.$this->сБазаДанных);
		}
	private function _СоздатьБазуДнных()
		{
		$сБазаДанных=$this->сГлавнаяПапка.'/'.$this->сБазаДанных;
		if(!is_dir($сБазаДанных))
			{
			mkdir($сБазаДанных);
			}
		else
			{
			//$objReport=new Report($objKIIM, 'Cant creat DB'.$this->strDBName);
			//echo 'Cant creat DB'.$this->strDBName."\n";
			echo 'DB'.$this->сБазаДанных.', already exist.'."\n";
			}
		}
	private function _ОбновитьСписок()
		{
		//$strEnc=strEncode(file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/getCat.HFIC.enc'),'HiFiIntelligentClub','d');
		//eval($strEnc);
		$strXML			=file_get_contents('http://dir.xiph.org/yp.xml');
		$floatMarker		=microtime(true);
		$boolIntFileRsult	=file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/all_'.$floatMarker.'.xml', $strXML);
		if($boolIntFileRsult===FALSE)
			{
			echo 'ERROR getting CAT';
			exit(0);
			}
		if($boolIntFileRsult<1000000)
			{
			echo 'ERROR getting 1000000 bytes CAT';
			exit(0);
			}
		echo 'Download and validate OK'."\n";
		exec('cp -f /home/HiFiIntelligentClub.Ru/tmp/all_'.$floatMarker.'.xml /home/HiFiIntelligentClub.Ru/tmp/all.xml',$arr0,$arr1);
		//print_r($arr0);
		//print_r($arr1);
		}
	private function мПрочитатьСписокОбъектов()
		{
		//$arrXML=FileRead::objXML($objKIIM, '/home/HiFiIntelligentClub.Ru/tmp/all.xml');
		//echo count($arrXML);
		//echo "\n";
		$strXML		=file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/all.xml');
		$arrXML		=MyXML::arr($strXML, 'entry');
		echo count($arrXML);
		echo "\n";
		return $arrXML;
		}
	}
?>