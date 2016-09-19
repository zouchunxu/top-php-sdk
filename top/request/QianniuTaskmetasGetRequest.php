<?php
/**
 * TOP API: taobao.qianniu.taskmetas.get request
 * 
 * @author auto create
 * @since 1.0, 2015.12.16
 */
class QianniuTaskmetasGetRequest
{
	/** 
	 * 任务类型
	 **/
	private $bizType;
	
	/** 
	 * 客户端的版本信息
	 **/
	private $clientInfo;
	
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 逗号分隔的字段列表.如id,title,content,sender_uid,sender_nick,finish_strategy,biz_sys_Id,biz_sys_task_type,start_time,end_time,reminder_flag,priority
	 **/
	private $fields;
	
	/** 
	 * 按关键字搜索
	 **/
	private $keyWord;
	
	/** 
	 * 任务元ID，多个以逗号分离
	 **/
	private $metaIds;
	
	/** 
	 * 排序字段。gmt_create,priority等
	 **/
	private $orderBy;
	
	/** 
	 * 升降序。asc为升，desc为降
	 **/
	private $orderType;
	
	/** 
	 * 分页数，最大100
	 **/
	private $pageSize;
	
	/** 
	 * 接收人uid
	 **/
	private $receiverUid;
	
	/** 
	 * 发起任务人的uid
	 **/
	private $senderUid;
	
	/** 
	 * 0为未完成。2为完成。4为取消。不填为所有
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setKeyWord($keyWord)
	{
		$this->keyWord = $keyWord;
		$this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord()
	{
		return $this->keyWord;
	}

	public function setMetaIds($metaIds)
	{
		$this->metaIds = $metaIds;
		$this->apiParas["meta_ids"] = $metaIds;
	}

	public function getMetaIds()
	{
		return $this->metaIds;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setReceiverUid($receiverUid)
	{
		$this->receiverUid = $receiverUid;
		$this->apiParas["receiver_uid"] = $receiverUid;
	}

	public function getReceiverUid()
	{
		return $this->receiverUid;
	}

	public function setSenderUid($senderUid)
	{
		$this->senderUid = $senderUid;
		$this->apiParas["sender_uid"] = $senderUid;
	}

	public function getSenderUid()
	{
		return $this->senderUid;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.taskmetas.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
