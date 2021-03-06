<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.MemberAddResponse</code>
 */
class MemberAddResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * member is the member information for the added member.
     *
     * Generated from protobuf field <code>.etcdserverpb.Member member = 2;</code>
     */
    private $member = null;
    /**
     * members is a list of all members after adding the new member.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.Member members = 3;</code>
     */
    private $members;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Etcdserverpb\ResponseHeader $header
     *     @type \Etcdserverpb\Member $member
     *           member is the member information for the added member.
     *     @type \Etcdserverpb\Member[]|\Google\Protobuf\Internal\RepeatedField $members
     *           members is a list of all members after adding the new member.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     * @return \Etcdserverpb\ResponseHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     * @param \Etcdserverpb\ResponseHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\ResponseHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * member is the member information for the added member.
     *
     * Generated from protobuf field <code>.etcdserverpb.Member member = 2;</code>
     * @return \Etcdserverpb\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * member is the member information for the added member.
     *
     * Generated from protobuf field <code>.etcdserverpb.Member member = 2;</code>
     * @param \Etcdserverpb\Member $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\Member::class);
        $this->member = $var;

        return $this;
    }

    /**
     * members is a list of all members after adding the new member.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.Member members = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * members is a list of all members after adding the new member.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.Member members = 3;</code>
     * @param \Etcdserverpb\Member[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Etcdserverpb\Member::class);
        $this->members = $arr;

        return $this;
    }

}

