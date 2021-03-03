<?php
/**
 * Created by PhpStorm.
 * User: Hien
 * Date: 12/10/2019
 * Time: 11:50 AM
 */

namespace App\Repositories;


use Repositories\Support\AbstractRepository;

class RoomFacilitiesRepository extends AbstractRepository
{
    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\RoomFacilities';
    }
    public function getFacilities($room_id)
    {
        return $this->model->where('room_id', $room_id)->get();
    }
}