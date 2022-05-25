<?php 
namespace App\Helpers;

/**
* Is Integer
* @param String $n
* @return Boolean
*/
if ( ! function_exists('_toInteger')) {
    function _toInteger( $n ) {
       $n = abs(intval(strval($n)));
       return $n;
    }
 }

/**
 * Check Is Valid Date ?
 * @param String $date
 * @return Boolean
 */
if ( ! function_exists('_isValidDate')) {
	function _isValidDate($date) {
		if (preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts)) {
			return checkdate($parts[2], $parts[3], $parts[1]) ? true : false;
		}
		return false;
	}
}

/**
 * Check Is Valid Year ?
 * @param String $year
 * @return Boolean
 */
if ( ! function_exists('_isValidYear')) {
    function _isValidYear( $year ) {
       if ( _toInteger($year) < 1000 || _toInteger($year) > 9999 ) return false;
       return true;
    }
}

/**
 * Check Is Valid Month ?
 * @param String $month
 * @return Boolean
 */
if ( ! function_exists('_isValidMonth')) {
    function _isValidMonth( $month ) {
       if ( _toInteger($month) < 1 || _toInteger($month) > 12 ) return false;
       return true;
    }
}

/**
 * Copyright
* @param String $year
* @param String $link
* @param String $company
* @return String
*/
if ( ! function_exists('copyright')) {
    function copyright($year = '', $link = '', $company_name = '') {
        if ( ! _isValidYear( $year )) return;
        $str = 'Copyright &copy; ';
        $str .= date('Y') > $year ? $year . ' - ' . date('Y') : $year;
        $str .= '<a href="';
        $str .= $link == '' ? base_url() : $link;
        $str .= '"> ';
        $str .= $company_name == '' ? str_replace(array('http://', 'https://', 'www.'), '', rtrim(base_url(), '/')) : $company_name;
        $str .= '</a>';
        $str .= ' All rights reserved.';
        return $str;
    }
}

/**
 * Day Name
 * @param String $idx
 * @return String
 */
if (! function_exists('day_name')) {
    function day_name($idx) {
        $arr = ['', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu'];
        return $arr[$idx];
    }
}

/**
 * Indonesian Date Formated
 * @param String $date
 * @return String
 */
if ( ! function_exists('indo_date')) {
	function indo_date($date) {
		if (_isValidDate($date)) {
			$parts = explode("-", $date);
			$result = $parts[2] . ' ' . bulan($parts[1]) . ' ' . $parts[0];
			return $result;
		}
		return '';
	}
}

/**
 * Bulan
 * @param String $key
 * @return String
 */
if ( ! function_exists('bulan')) {
	function bulan($key = '') {
		$data = [
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		];
		return $key === '' ? $data : $data[$key];
	}
}

/**
 * Month
 * @param String $key
 * @return String
 */
if ( ! function_exists('month')) {
	function month($key = '') {
		$data = [
			'01' => 'January',
			'02' => 'February',
			'03' => 'March',
			'04' => 'April',
			'05' => 'May',
			'06' => 'June',
			'07' => 'July',
			'08' => 'August',
			'09' => 'September',
			'10' => 'October',
			'11' => 'November',
			'12' => 'December',
		];
		return $key === '' ? $data : $data[$key];
	}
}

/**
 * Get IP Address
 * @return String
 */
if (! function_exists('get_ip_address')) {
	function get_ip_address() {
		return getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : getenv('REMOTE_ADDR');
	}
}

/**
 * check_internet_connection
 * @return Boolean
 */
if (! function_exists('check_internet_connection')) {
	function check_internet_connection() {
		return checkdnsrr('google.com');
	}
}
