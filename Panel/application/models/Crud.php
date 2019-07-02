<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function createData($table, $data) {
		return $this->db->insert($table, $data);
		// return $this->db->error();
	}

	function readData($select, $from, $where, $joinTable, $groupBy, $order, $orderBy, $limit = NULL) {
		$this->db->select('SQL_CALC_FOUND_ROWS ' . $select, FALSE);
		$this->db->from($from);
		if (count($joinTable > 0)) {
			foreach ($joinTable as $join) {
				$this->db->join($join['table'], $join['relation'], 'LEFT');
			}
		}
		$this->db->where($where);
		if ($groupBy != '') {
			$this->db->group_by($groupBy);
		}
		$this->db->order_by($order, $orderBy);
		if (! is_null($limit)) $this->db->limit($limit[0], $limit[1]);
		$query = $this->db->get();
		return $query->result_array();
		//return $this->db->last_query();
	}

	function readDataPage($select, $from, $where, $joinTable, $groupBy, $order, $orderBy, $limit, $offset) {
		$this->db->select('SQL_CALC_FOUND_ROWS ' . $select, FALSE);
		$this->db->from($from);
		if (count($joinTable > 0)) {
			foreach ($joinTable as $join) {
				$this->db->join($join['table'], $join['relation'], 'LEFT');
			}
		}
		$this->db->where($where);
		if ($groupBy != '') {
			$this->db->group_by($groupBy);
		}
		$this->db->order_by($order, $orderBy);
		if (! is_null($limit)) $this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
		//return $this->db->last_query();
	}

	function readDataLike($select, $from, $where, $joinTable, $groupBy, $order, $orderBy) {
		$this->db->select('SQL_CALC_FOUND_ROWS ' . $select, FALSE);
		$this->db->from($from);
		if (count($joinTable > 0)) {
			foreach ($joinTable as $join) {
				$this->db->join($join['table'], $join['relation'], 'LEFT');
			}
		}
		$this->db->like($where);
		if ($groupBy !== '') {
			$this->db->group_by($groupBy);
		}
		$this->db->order_by($order, $orderBy);
		$query = $this->db->get();
		return $query->result_array();
		//return $this->db->last_query();
	}

	function updateData($table, $data, $where) {
		$this->db->where($where);
		return $this->db->update($table, $data);
		// return $this->db->error();
	}

	function deleteData($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);
		// return $this->db->error();
	}
	function multipleDelete($table, $field, $code) {
		$this->db->where($field,$code);
		$this->db->delete($table);
		// return $this->db->error();
	}
	function readDataWhere($select, $from, $where, $or, $joinTable, $groupBy, $order, $orderBy, $limit = NULL) {
		$this->db->select('SQL_CALC_FOUND_ROWS ' . $select, FALSE);
		$this->db->from($from);
		if (count($joinTable > 0)) {
			foreach ($joinTable as $join) {
				$this->db->join($join['table'], $join['relation'], 'LEFT');
			}
		}
		$this->db->where($where);
		$this->db->or_where($or);
		if ($groupBy != '') {
			$this->db->group_by($groupBy);
		}
		$this->db->order_by($order, $orderBy);
		if (! is_null($limit)) $this->db->limit($limit[0], $limit[1]);
		$query = $this->db->get();
		return $query->result_array();
		//return $this->db->last_query();
	}

}