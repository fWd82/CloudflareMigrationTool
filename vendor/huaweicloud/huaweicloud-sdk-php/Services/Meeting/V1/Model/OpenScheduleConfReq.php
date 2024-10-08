<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenScheduleConfReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenScheduleConfReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subject  网络研讨会主题。长度限制为128个字符。
    * description  网络研讨会描述，长度限制为1000个字符。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * attendees  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    * notifySetting  notifySetting
    * vmrId  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    * guestPasswd  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * audiencePasswd  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * callRestriction  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    * scope  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    * enableRecording  enableRecording
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * liveUrl  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subject' => 'string',
            'description' => 'string',
            'startTime' => 'string',
            'duration' => 'int',
            'timeZoneId' => 'int',
            'attendees' => '\HuaweiCloud\SDK\Meeting\V1\Model\OpenAttendeeEntity[]',
            'notifySetting' => '\HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting',
            'vmrId' => 'string',
            'guestPasswd' => 'string',
            'audiencePasswd' => 'string',
            'callRestriction' => 'bool',
            'scope' => 'int',
            'audienceScope' => 'int',
            'enableRecording' => '\HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum',
            'liveAddress' => 'string',
            'auxAddress' => 'string',
            'liveUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subject  网络研讨会主题。长度限制为128个字符。
    * description  网络研讨会描述，长度限制为1000个字符。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * attendees  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    * notifySetting  notifySetting
    * vmrId  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    * guestPasswd  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * audiencePasswd  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * callRestriction  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    * scope  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    * enableRecording  enableRecording
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * liveUrl  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subject' => null,
        'description' => null,
        'startTime' => null,
        'duration' => 'int32',
        'timeZoneId' => 'int32',
        'attendees' => null,
        'notifySetting' => null,
        'vmrId' => null,
        'guestPasswd' => null,
        'audiencePasswd' => null,
        'callRestriction' => null,
        'scope' => null,
        'audienceScope' => null,
        'enableRecording' => null,
        'liveAddress' => null,
        'auxAddress' => null,
        'liveUrl' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * subject  网络研讨会主题。长度限制为128个字符。
    * description  网络研讨会描述，长度限制为1000个字符。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * attendees  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    * notifySetting  notifySetting
    * vmrId  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    * guestPasswd  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * audiencePasswd  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * callRestriction  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    * scope  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    * enableRecording  enableRecording
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * liveUrl  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subject' => 'subject',
            'description' => 'description',
            'startTime' => 'startTime',
            'duration' => 'duration',
            'timeZoneId' => 'timeZoneId',
            'attendees' => 'attendees',
            'notifySetting' => 'notifySetting',
            'vmrId' => 'vmrID',
            'guestPasswd' => 'guestPasswd',
            'audiencePasswd' => 'audiencePasswd',
            'callRestriction' => 'callRestriction',
            'scope' => 'scope',
            'audienceScope' => 'audienceScope',
            'enableRecording' => 'enableRecording',
            'liveAddress' => 'liveAddress',
            'auxAddress' => 'auxAddress',
            'liveUrl' => 'liveUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subject  网络研讨会主题。长度限制为128个字符。
    * description  网络研讨会描述，长度限制为1000个字符。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * attendees  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    * notifySetting  notifySetting
    * vmrId  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    * guestPasswd  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * audiencePasswd  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * callRestriction  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    * scope  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    * enableRecording  enableRecording
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * liveUrl  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'subject' => 'setSubject',
            'description' => 'setDescription',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'timeZoneId' => 'setTimeZoneId',
            'attendees' => 'setAttendees',
            'notifySetting' => 'setNotifySetting',
            'vmrId' => 'setVmrId',
            'guestPasswd' => 'setGuestPasswd',
            'audiencePasswd' => 'setAudiencePasswd',
            'callRestriction' => 'setCallRestriction',
            'scope' => 'setScope',
            'audienceScope' => 'setAudienceScope',
            'enableRecording' => 'setEnableRecording',
            'liveAddress' => 'setLiveAddress',
            'auxAddress' => 'setAuxAddress',
            'liveUrl' => 'setLiveUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subject  网络研讨会主题。长度限制为128个字符。
    * description  网络研讨会描述，长度限制为1000个字符。
    * startTime  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    * duration  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    * timeZoneId  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    * attendees  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    * notifySetting  notifySetting
    * vmrId  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    * guestPasswd  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * audiencePasswd  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    * callRestriction  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    * scope  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    * audienceScope  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    * enableRecording  enableRecording
    * liveAddress  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * auxAddress  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    * liveUrl  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'subject' => 'getSubject',
            'description' => 'getDescription',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'timeZoneId' => 'getTimeZoneId',
            'attendees' => 'getAttendees',
            'notifySetting' => 'getNotifySetting',
            'vmrId' => 'getVmrId',
            'guestPasswd' => 'getGuestPasswd',
            'audiencePasswd' => 'getAudiencePasswd',
            'callRestriction' => 'getCallRestriction',
            'scope' => 'getScope',
            'audienceScope' => 'getAudienceScope',
            'enableRecording' => 'getEnableRecording',
            'liveAddress' => 'getLiveAddress',
            'auxAddress' => 'getAuxAddress',
            'liveUrl' => 'getLiveUrl'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['timeZoneId'] = isset($data['timeZoneId']) ? $data['timeZoneId'] : null;
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['notifySetting'] = isset($data['notifySetting']) ? $data['notifySetting'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['guestPasswd'] = isset($data['guestPasswd']) ? $data['guestPasswd'] : null;
        $this->container['audiencePasswd'] = isset($data['audiencePasswd']) ? $data['audiencePasswd'] : null;
        $this->container['callRestriction'] = isset($data['callRestriction']) ? $data['callRestriction'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['audienceScope'] = isset($data['audienceScope']) ? $data['audienceScope'] : null;
        $this->container['enableRecording'] = isset($data['enableRecording']) ? $data['enableRecording'] : null;
        $this->container['liveAddress'] = isset($data['liveAddress']) ? $data['liveAddress'] : null;
        $this->container['auxAddress'] = isset($data['auxAddress']) ? $data['auxAddress'] : null;
        $this->container['liveUrl'] = isset($data['liveUrl']) ? $data['liveUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['timeZoneId'] === null) {
            $invalidProperties[] = "'timeZoneId' can't be null";
        }
        if ($this->container['vmrId'] === null) {
            $invalidProperties[] = "'vmrId' can't be null";
        }
            if (!is_null($this->container['liveAddress']) && (mb_strlen($this->container['liveAddress']) > 255)) {
                $invalidProperties[] = "invalid value for 'liveAddress', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['liveAddress']) && (mb_strlen($this->container['liveAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['auxAddress']) && (mb_strlen($this->container['auxAddress']) > 255)) {
                $invalidProperties[] = "invalid value for 'auxAddress', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['auxAddress']) && (mb_strlen($this->container['auxAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'auxAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['liveUrl']) && (mb_strlen($this->container['liveUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'liveUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['liveUrl']) && (mb_strlen($this->container['liveUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveUrl', the character length must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets subject
    *  网络研讨会主题。长度限制为128个字符。
    *
    * @return string
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string $subject 网络研讨会主题。长度限制为128个字符。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets description
    *  网络研讨会描述，长度限制为1000个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 网络研讨会描述，长度限制为1000个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets startTime
    *  网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 网络研讨会开始时间（UTC时间），格式“yyyy-MM-dd HH:mm”。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration 网络研讨会持续时长，单位分钟，取值范围[15,1440]。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets timeZoneId
    *  会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    *
    * @return int
    */
    public function getTimeZoneId()
    {
        return $this->container['timeZoneId'];
    }

    /**
    * Sets timeZoneId
    *
    * @param int $timeZoneId 会议通知中会议时间的时区信息。时区信息，参考[[时区映射关系](https://support.huaweicloud.com/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hws)[[时区映射关系](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0110.html#ZH-CN_TOPIC_0212714472__table137407441463)](tag:hk)。 > * 举例：“timeZoneID”:\"26\"，则通过华为云会议发送的会议通知中的时间将会标记为如“2021/11/11 星期四 00:00 - 02:00 (GMT) 格林威治标准时间:都柏林, 爱丁堡, 里斯本, 伦敦”。
    *
    * @return $this
    */
    public function setTimeZoneId($timeZoneId)
    {
        $this->container['timeZoneId'] = $timeZoneId;
        return $this;
    }

    /**
    * Gets attendees
    *  与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\OpenAttendeeEntity[]|null
    */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
    * Sets attendees
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\OpenAttendeeEntity[]|null $attendees 与会嘉宾列表。 > 观众只能自己通过链接或者会议ID+密码加入，不支持被邀请。
    *
    * @return $this
    */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;
        return $this;
    }

    /**
    * Gets notifySetting
    *  notifySetting
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting|null
    */
    public function getNotifySetting()
    {
        return $this->container['notifySetting'];
    }

    /**
    * Sets notifySetting
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\OpenNotifySetting|null $notifySetting notifySetting
    *
    * @return $this
    */
    public function setNotifySetting($notifySetting)
    {
        $this->container['notifySetting'] = $notifySetting;
        return $this;
    }

    /**
    * Gets vmrId
    *  绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    *
    * @return string
    */
    public function getVmrId()
    {
        return $this->container['vmrId'];
    }

    /**
    * Sets vmrId
    *
    * @param string $vmrId 绑定给当前创建网络研讨会帐号的VMR ID。通过[[查询云会议室及个人会议ID](https://support.huaweicloud.com/api-meeting/meeting_21_1106.html)](tag:hws)[[查询云会议室及个人会议ID](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1106.html)](tag:hk)接口获取。 > * vmrID取上述查询接口中返回的id，不是vmrId。 > * 创建网络研讨会时，使用vmrMode=2的VMR。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets guestPasswd
    *  嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    *
    * @return string|null
    */
    public function getGuestPasswd()
    {
        return $this->container['guestPasswd'];
    }

    /**
    * Sets guestPasswd
    *
    * @param string|null $guestPasswd 嘉宾密码（4-16位长度的纯数字)。不指定则系统自动生成。
    *
    * @return $this
    */
    public function setGuestPasswd($guestPasswd)
    {
        $this->container['guestPasswd'] = $guestPasswd;
        return $this;
    }

    /**
    * Gets audiencePasswd
    *  观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    *
    * @return string|null
    */
    public function getAudiencePasswd()
    {
        return $this->container['audiencePasswd'];
    }

    /**
    * Sets audiencePasswd
    *
    * @param string|null $audiencePasswd 观众密码（4-16位长度的纯数字)。不指定则系统自动生成。
    *
    * @return $this
    */
    public function setAudiencePasswd($audiencePasswd)
    {
        $this->container['audiencePasswd'] = $audiencePasswd;
        return $this;
    }

    /**
    * Gets callRestriction
    *  入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    *
    * @return bool|null
    */
    public function getCallRestriction()
    {
        return $this->container['callRestriction'];
    }

    /**
    * Sets callRestriction
    *
    * @param bool|null $callRestriction 入会范围开关。 * false：不限制入会范围 * true：限制入会范围
    *
    * @return $this
    */
    public function setCallRestriction($callRestriction)
    {
        $this->container['callRestriction'] = $callRestriction;
        return $this;
    }

    /**
    * Gets scope
    *  主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    *
    * @return int|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param int|null $scope 主持人、嘉宾入会范围 。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户 * 3: 被邀请用户
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets audienceScope
    *  观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    *
    * @return int|null
    */
    public function getAudienceScope()
    {
        return $this->container['audienceScope'];
    }

    /**
    * Sets audienceScope
    *
    * @param int|null $audienceScope 观众入会范围。仅callRestriction设置成true后生效。 * 0: 所有用户 * 2: 企业内用户和被邀请用户
    *
    * @return $this
    */
    public function setAudienceScope($audienceScope)
    {
        $this->container['audienceScope'] = $audienceScope;
        return $this;
    }

    /**
    * Gets enableRecording
    *  enableRecording
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum|null
    */
    public function getEnableRecording()
    {
        return $this->container['enableRecording'];
    }

    /**
    * Sets enableRecording
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\YesNoEnum|null $enableRecording enableRecording
    *
    * @return $this
    */
    public function setEnableRecording($enableRecording)
    {
        $this->container['enableRecording'] = $enableRecording;
        return $this;
    }

    /**
    * Gets liveAddress
    *  主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return string|null
    */
    public function getLiveAddress()
    {
        return $this->container['liveAddress'];
    }

    /**
    * Sets liveAddress
    *
    * @param string|null $liveAddress 主流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return $this
    */
    public function setLiveAddress($liveAddress)
    {
        $this->container['liveAddress'] = $liveAddress;
        return $this;
    }

    /**
    * Gets auxAddress
    *  辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return string|null
    */
    public function getAuxAddress()
    {
        return $this->container['auxAddress'];
    }

    /**
    * Sets auxAddress
    *
    * @param string|null $auxAddress 辅流直播推流地址，在录播类型为 :直播、直播+录播时有效。最大不超过255个字符。
    *
    * @return $this
    */
    public function setAuxAddress($auxAddress)
    {
        $this->container['auxAddress'] = $auxAddress;
        return $this;
    }

    /**
    * Gets liveUrl
    *  直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @return string|null
    */
    public function getLiveUrl()
    {
        return $this->container['liveUrl'];
    }

    /**
    * Sets liveUrl
    *
    * @param string|null $liveUrl 直播房间地址，在录播类型为录播+直播推流时有效。最大不超过255个字符。
    *
    * @return $this
    */
    public function setLiveUrl($liveUrl)
    {
        $this->container['liveUrl'] = $liveUrl;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

