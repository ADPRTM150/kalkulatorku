<?php
require 'C:\xampp\htdocs\kalkulatorku\kalkulator.php';

use PHPUnit\framework\TestCase;

class PerhitunganTest extends TestCase
{

	public function testTambah(): void
	{
		$hasilTambah = tambah(5, 5);
		$this->assertEquals(12, $hasilTambah);
	}

	public function testKurang(): void
	{
		$hasilKurang = kurang(7, 2);
		$this->assertEquals(5, $hasilKurang);
	}

	public function testKali(): void
	{
		$hasilKali = kali(2, 2);
		$this->assertEquals(4, $hasilKali);
	}

	public function testBagi(): void
	{
		$hasilBagi = bagi(8, 4);
		$this->assertEquals(2, $hasilBagi);
	}
}
