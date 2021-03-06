<?php
namespace app\api\controller;

use app\api\model\AttrModel;
use app\api\model\BoardModel;
use app\api\model\ProductModel;
use app\api\model\SizeModel;
use app\api\model\WindowModel;

class Script
{
    public function initial(){
         $data = ["AFL MK01 1073",
"AFL MK01 1099",
"AFL MK02 1073",
"AFL MK02 1099",
"AFL MK04 1073",
"AFL MK04 1099",
"AFL MK06 1073",
"AFL MK06 1099",
"AFL MK08 1073",
"AFL MK08 1099",
"AFL SK01 1073",
"AFL SK01 1099",
"AFL SK02 1073",
"AFL SK02 1099",
"AFL SK04 1073",
"AFL SK04 1099",
"AFL SK06 1073",
"AFL SK06 1099",
"AFL SK08 1073",
"AFL SK08 1099",
"AFL UK01 1073",
"AFL UK01 1099",
"AFL UK02 1073",
"AFL UK02 1099",
"AFL UK04 1073",
"AFL UK04 1099",
"AFL UK06 1073",
"AFL UK06 1099",
"AFL UK08 1073",
"AFL UK08 1099",
"ALG 070070 0073",
"ALG 070070 8073",
"ALG 070100 0073",
"ALG 070100 8073",
"ALG 070130 0073",
"ALG 070130 8073",
"ALG 090090 0073",
"ALG 090090 8073",
"ALG 090130 0073",
"ALG 090130 8073",
"ALG 100100 0073",
"ALG 100100 8073",
"ALG 130130 0073",
"ALG 130130 8073",
"ALK 070070 0073",
"ALK 070070 8073",
"ALK 070100 0073",
"ALK 070100 8073",
"ALK 070130 0073",
"ALK 070130 8073",
"ALK 090090 0073",
"ALK 090090 8073",
"ALK 090130 0073",
"ALK 090130 8073",
"ALK 100100 0073",
"ALK 100100 8073",
"ALK 130130 0073",
"ALK 130130 8073",
"AMC 100 CHN",
"APL MK01 1000",
"APL MK01 1054",
"APL MK01 1054A",
"APL MK01 1073",
"APL MK01 1073A",
"APL MK01 1074",
"APL MK01 1099",
"APL MK01 1099A",
"APL MK02 1000",
"APL MK02 1054",
"APL MK02 1054A",
"APL MK02 1073",
"APL MK02 1073A",
"APL MK02 1074",
"APL MK02 1099",
"APL MK02 1099A",
"APL MK04 1000",
"APL MK04 1054",
"APL MK04 1054A",
"APL MK04 1065",
"APL MK04 1073",
"APL MK04 1073A",
"APL MK04 1074",
"APL MK04 1099",
"APL MK04 1099A",
"APL MK06 1000",
"APL MK06 1054",
"APL MK06 1054A",
"APL MK06 1065",
"APL MK06 1073",
"APL MK06 1073A",
"APL MK06 1074",
"APL MK06 1099",
"APL MK06 1099A",
"APL MK08 1000",
"APL MK08 1054",
"APL MK08 1054A",
"APL MK08 1065",
"APL MK08 1073",
"APL MK08 1073A",
"APL MK08 1074",
"APL MK08 1099",
"APL MK08 1099A",
"APL SK01 1000",
"APL SK01 1054",
"APL SK01 1054A",
"APL SK01 1073",
"APL SK01 1073A",
"APL SK01 1074",
"APL SK01 1099",
"APL SK01 1099A",
"APL SK02 1000",
"APL SK02 1054",
"APL SK02 1054A",
"APL SK02 1073",
"APL SK02 1073A",
"APL SK02 1074",
"APL SK02 1099",
"APL SK02 1099A",
"APL SK04 1000",
"APL SK04 1054",
"APL SK04 1054A",
"APL SK04 1073",
"APL SK04 1073A",
"APL SK04 1074",
"APL SK04 1099",
"APL SK04 1099A",
"APL SK06 1000",
"APL SK06 1054",
"APL SK06 1054A",
"APL SK06 1065",
"APL SK06 1073",
"APL SK06 1073A",
"APL SK06 1074",
"APL SK06 1099",
"APL SK06 1099A",
"APL SK08 1000",
"APL SK08 1054",
"APL SK08 1054A",
"APL SK08 1065",
"APL SK08 1073",
"APL SK08 1073A",
"APL SK08 1074",
"APL SK08 1099",
"APL SK08 1099A",
"ARS 100 CHN",
"ASL MK04 1000",
"ASL MK04 1054",
"ASL MK04 1065",
"ASL MK04 1099",
"ASL MK06 1000",
"ASL MK06 1054",
"ASL MK06 1065",
"ASL MK06 1073",
"ASL MK06 1099",
"ASL MK08 1000",
"ASL MK08 1054",
"ASL MK08 1065",
"ASL MK08 1073",
"ASL MK08 1099",
"ASL SK06 1000",
"ASL SK06 1065",
"ASL SK06 1073",
"ASL SK06 1099",
"ASL SK08 1000",
"ASL SK08 1065",
"ASL SK08 1073",
"ASL SK08 1099",
"ATE MK02 1000",
"ATE MK02 1054",
"ATE MK02 1065",
"ATE MK02 1073",
"ATE MK02 2073L",
"ATE MK04 1000",
"ATE MK04 1065",
"ATE MK04 1073",
"ATE MK04 2073L",
"ATE MK06 1000",
"ATE MK06 1065",
"ATE MK06 1073",
"ATE MK06 2073L",
"ATE MK08 1000",
"ATE MK08 1065",
"ATE MK08 1073",
"ATE MK08 2073L",
"ATE SK02 1000",
"ATE SK02 1054",
"ATE SK02 1065",
"ATE SK02 1073",
"ATE SK02 2073L",
"ATE SK04 1000",
"ATE SK04 1054",
"ATE SK04 1065",
"ATE SK04 1073",
"ATE SK04 2073L",
"ATE SK06 1000",
"ATE SK06 1054",
"ATE SK06 1065",
"ATE SK06 1073",
"ATE SK06 2073L",
"ATE SK08 1000",
"ATE SK08 1054",
"ATE SK08 1065",
"ATE SK08 1073",
"ATE SK08 2073L",
"ATS MK02 1073",
"ATS MK04 1073",
"ATS MK06 1073",
"ATS MK08 1073",
"ATS SK02 1073",
"ATS SK04 1073",
"ATS SK06 1073",
"ATS SK08 1073",
"CFP 060090 0073U",
"CFP 090090 0073U",
"CFP 090120 0073U",
"CFP 100100 0073U",
"CFP 120120 0073U",
"CVP 080080 0673QV",
"CVP 100100 0073U",
"CVP 100100 0173Q",
"CVP 100100 0673QVA",
"CVP 120120 0073U",
"CVP 120120 0673QVA",
"CXP 090120 0473Q",
"CXP 100100 0473Q",
"CXP 120120 0473Q",
"DFD M04 1100S",
"DFD MK04 1100S",
"DFD MK04 1705S",
"DFD MK04 4555S",
"DFD MK04 4558S",
"DFD MK04 4567S",
"DFD MK04 4572S",
"DFD MK06 0705S",
"DFD MK06 1025S",
"DFD MK06 1100SH",
"DFD MK06 4558S",
"DFD MK06 4564S",
"DFD MK06 4567S",
"DFD MK06 4572S",
"DFD MK08 1085S",
"DFD MK08 1100SC",
"DFD MK08 1100SH",
"DFD MK08 4558S",
"DFD MK08 4560S",
"DFD MK08 4563S",
"DFD MK08 4569S",
"DFD S04 0705S",
"DFD S04 1025S",
"DFD S04 1085S",
"DFD S04 1100S",
"DFD S08 1085S",
"DFD SK06 1100SH",
"DFD SK06 4555S",
"DFD SK06 4558S",
"DFD SK06 4560S",
"DFD SK06 4564S",
"DFD SK06 4567S",
"DFD SK06 4568S",
"DFD SK06 4569S",
"DFD SK06 4572S",
"DFD SK06 4573S",
"DFD SK08 1085S",
"DFD SK08 1100SH",
"DFD SK08 4558S",
"DFD SK08 4569S",
"DFD SK08 4571S",
"DFD SK10 0705S",
"DFD SK10 1025S",
"DFD SK10 1085S",
"DFD SK10 1100S",
"DFD SK10 4558S",
"DFD SK10 4560S",
"DFD SK10 4569S",
"DFD SK10 4571S",
"DFD SK10 4572S",
"DKL M04 1100SH",
"DKL M06 1085SH",
"DKL M06 1100SH",
"DKL M08 1085SH",
"DKL M08 1100SH",
"DKL MK04 0705S",
"DKL MK04 1025S",
"DKL MK04 1085SC",
"DKL MK04 1100SH",
"DKL MK04 1705S",
"DKL MK04 4555S",
"DKL MK04 4556S",
"DKL MK04 4558S",
"DKL MK04 4570S",
"DKL MK04 4617S",
"DKL MK06 0705S",
"DKL MK06 1025SH",
"DKL MK06 1085SH",
"DKL MK06 1100SH",
"DKL MK06 4555S",
"DKL MK06 4556S",
"DKL MK06 4558S",
"DKL MK06 4569S",
"DKL MK06 4571S",
"DKL MK06 4713S",
"DKL MK08 0705S",
"DKL MK08 1025SH",
"DKL MK08 1085SC",
"DKL MK08 1085SH",
"DKL MK08 1100SH",
"DKL MK08 1705S",
"DKL MK08 4556S",
"DKL MK08 4558S",
"DKL MK08 4560S",
"DKL MK08 4568S",
"DKL MK08 4569S",
"DKL MK08 4571S",
"DKL MK08 5195S",
"DKL S04 1025S",
"DKL S04 1085S",
"DKL S04 1100S",
"DKL S04 1705S",
"DKL S04 4555S",
"DKL S04 4558S",
"DKL S04 4562S",
"DKL S04 4564S",
"DKL S04 4568S",
"DKL S04 4571S",
"DKL S06 0605S",
"DKL S06 1100S",
"DKL S08 1100S",
"DKL SK06 0705S",
"DKL SK06 1025S",
"DKL SK06 1085S",
"DKL SK06 1100S",
"DKL SK06 1705S",
"DKL SK06 4555S",
"DKL SK06 4558S",
"DKL SK06 4710S",
"DKL SK06 5195S",
"DKL SK08 0705S",
"DKL SK08 1085S",
"DKL SK08 1100S",
"DKL SK08 4555S",
"DKL SK08 4558S",
"DKL SK08 4569S",
"DKL SK08 4571S",
"DKL SK10 1025S",
"DKL SK10 1085S",
"DKL SK10 1100S",
"DKL SK10 1705S",
"DKL SK10 4555S",
"DKL SK10 4558S",
"DML M08 1100S",
"DML MK04 0705S",
"DML MK04 1025S",
"DML MK04 1085S",
"DML MK04 1100E",
"DML MK04 1100S",
"DML MK04 1705S",
"DML MK04 4555S",
"DML MK04 4556S",
"DML MK04 4558S",
"DML MK06 0705S",
"DML MK06 1025S",
"DML MK06 1085S",
"DML MK06 1100S",
"DML MK06 1705S",
"DML MK06 4555S",
"DML MK06 4556S",
"DML MK06 4558S",
"DML MK06 4560S",
"DML MK06 4568S",
"DML MK08 1025S",
"DML MK08 1085S",
"DML MK08 1100S",
"DML MK08 1705S",
"DML MK08 4555S",
"DML MK08 4556S",
"DML MK08 4558S",
"DML MK08 4559S",
"DML SK06 0705S",
"DML SK06 1025S",
"DML SK06 1085S",
"DML SK06 1100S",
"DML SK06 4555S",
"DML SK06 4558S",
"DML SK06 4567S",
"DML SK08 1025S",
"DML SK08 1085S",
"DML SK08 1100S",
"DML SK08 1705S",
"DML SK08 4555S",
"DML SK08 4558S",
"DML SK08 4569S",
"DML SK08 4570S",
"DSC 2222 1025E",
"DSC 2222 1025S",
"DSC 2234 1025S",
"DSC 2246 1025S",
"DSC 3030 1025E",
"DSC 3030 1025S",
"DSC 3046 1025E",
"DSC 3046 1025S",
"DSC 3434 1025E",
"DSC 3434 1025S",
"DSC 4646 1025S",
"DSL MK04 1025S",
"DSL MK04 1085S",
"DSL MK04 1100S",
"DSL MK04 1705S",
"DSL MK04 4558S",
"DSL MK06 0705S",
"DSL MK06 1025S",
"DSL MK06 1085S",
"DSL MK06 1100S",
"DSL MK06 1705S",
"DSL MK08 1025S",
"DSL MK08 1085S",
"DSL MK08 1100S",
"DSL SK06 1025S",
"DSL SK06 1085S",
"DSL SK06 1100S",
"DSL SK06 1705S",
"DSL SK08 1025S",
"DSL SK08 1085S",
"DSL SK08 1100S",
"EDH MK01 0000D",
"EDH MK02 0000D",
"EDH MK04 0000D",
"EDH MK06 0000D",
"EDH MK08 0000D",
"EDH SK01 0000D",
"EDH SK02 0000D",
"EDH SK04 0000D",
"EDH SK06 0000D",
"EDH SK08 0000D",
"EDS MK01 0000D",
"EDS MK01 0000X30",
"EDS MK02 0000D",
"EDS MK02 0000X30",
"EDS MK04 0000D",
"EDS MK04 0000X30",
"EDS MK06 0000D",
"EDS MK06 0000X30",
"EDS MK08 0000D",
"EDS MK08 0000X30",
"EDS SK01 0000D",
"EDS SK01 0000X30",
"EDS SK02 0000D",
"EDS SK02 0000X30",
"EDS SK04 0000D",
"EDS SK04 0000X30",
"EDS SK06 0000D",
"EDS SK06 0000X30",
"EDS SK08 0000D",
"EDS SK08 0000X30",
"EKC MK01 0001ADF",
"EKC MK01 0001ADO",
"EKC MK01 0002ADF",
"EKC MK01 0002ADO",
"EKC MK01 0003ADF",
"EKC MK01 0003ADO",
"EKC MK02 0001ADF",
"EKC MK02 0001ADO",
"EKC MK02 0002ADF",
"EKC MK02 0002ADO",
"EKC MK02 0003ADF",
"EKC MK02 0003ADO",
"EKC MK04 0001ADF",
"EKC MK04 0001ADO",
"EKC MK04 0002ADF",
"EKC MK04 0002ADO",
"EKC MK04 0003ADF",
"EKC MK04 0003ADO",
"EKC MK06 0001ADF",
"EKC MK06 0001ADO",
"EKC MK06 0002ADF",
"EKC MK06 0002ADO",
"EKC MK06 0003ADF",
"EKC MK06 0003ADO",
"EKC MK08 0001ADF",
"EKC MK08 0001ADO",
"EKC MK08 0002ADF",
"EKC MK08 0002ADO",
"EKC MK08 0003ADF",
"EKC MK08 0003ADO",
"EKC SK01 0001ADF",
"EKC SK01 0001ADO",
"EKC SK01 0002ADF",
"EKC SK01 0002ADO",
"EKC SK01 0003ADF",
"EKC SK01 0003ADO",
"EKC SK02 0001ADF",
"EKC SK02 0001ADO",
"EKC SK02 0002ADF",
"EKC SK02 0002ADO",
"EKC SK02 0003ADF",
"EKC SK02 0003ADO",
"EKC SK04 0001ADF",
"EKC SK04 0001ADO",
"EKC SK04 0002ADF",
"EKC SK04 0002ADO",
"EKC SK04 0003ADF",
"EKC SK04 0003ADO",
"EKC SK06 0001ADF",
"EKC SK06 0001ADO",
"EKC SK06 0002ADF",
"EKC SK06 0002ADO",
"EKC SK06 0003ADF",
"EKC SK06 0003ADO",
"EKC SK08 0001ADF",
"EKC SK08 0001ADO",
"EKC SK08 0002ADF",
"EKC SK08 0002ADO",
"EKC SK08 0003ADF",
"EKC SK08 0003ADO",
"EKC UK01 0001ADF",
"EKC UK01 0001ADO",
"EKC UK01 0002ADF",
"EKC UK01 0002ADO",
"EKC UK01 0003ADF",
"EKC UK01 0003ADO",
"EKC UK02 0001ADF",
"EKC UK02 0001ADO",
"EKC UK02 0002ADF",
"EKC UK02 0002ADO",
"EKC UK02 0003ADF",
"EKC UK02 0003ADO",
"EKC UK04 0001ADF",
"EKC UK04 0001ADO",
"EKC UK04 0002ADF",
"EKC UK04 0002ADO",
"EKC UK04 0003ADF",
"EKC UK04 0003ADO",
"EKC UK06 0001ADF",
"EKC UK06 0001ADO",
"EKC UK06 0002ADF",
"EKC UK06 0002ADO",
"EKC UK06 0003ADF",
"EKC UK06 0003ADO",
"EKC UK08 0001ADF",
"EKC UK08 0001ADO",
"EKC UK08 0002ADF",
"EKC UK08 0002ADO",
"EKC UK08 0003ADF",
"EKC UK08 0003ADO",
"EKH MK01 0001ED",
"EKH MK01 0002ED",
"EKH MK01 0003D",
"EKH MK02 0001ED",
"EKH MK02 0002ED",
"EKH MK02 0003D",
"EKH MK04 0001ED",
"EKH MK04 0002ED",
"EKH MK04 0003D",
"EKH MK06 0001ED",
"EKH MK06 0002ED",
"EKH MK06 0003D",
"EKH MK08 0001ED",
"EKH MK08 0002ED",
"EKH MK08 0003D",
"EKH SK01 0001ED",
"EKH SK01 0002ED",
"EKH SK01 0003D",
"EKH SK02 0001ED",
"EKH SK02 0002ED",
"EKH SK02 0003D",
"EKH SK04 0001ED",
"EKH SK04 0002ED",
"EKH SK04 0003D",
"EKH SK06 0001ED",
"EKH SK06 0002ED",
"EKH SK06 0003D",
"EKH SK08 0001ED",
"EKH SK08 0002ED",
"EKH SK08 0003D",
"EKS MK01 0001CX30",
"EKS MK01 0001ED",
"EKS MK01 0001EX30",
"EKS MK01 0002CX30",
"EKS MK01 0002ED",
"EKS MK01 0002EX30",
"EKS MK01 0003CX30",
"EKS MK01 0003D",
"EKS MK01 0003X30",
"EKS MK01 0004EED",
"EKS MK01 0006ED",
"EKS MK01 0007ED",
"EKS MK02 0001CX30",
"EKS MK02 0001ED",
"EKS MK02 0001EX30",
"EKS MK02 0002CX30",
"EKS MK02 0002ED",
"EKS MK02 0002EX30",
"EKS MK02 0003CX30",
"EKS MK02 0003D",
"EKS MK02 0003X30",
"EKS MK02 0004EED",
"EKS MK02 0006ED",
"EKS MK02 0007ED",
"EKS MK04 0001CX30",
"EKS MK04 0001ED",
"EKS MK04 0001EX30",
"EKS MK04 0002CX30",
"EKS MK04 0002ED",
"EKS MK04 0002EX30",
"EKS MK04 0003CX30",
"EKS MK04 0003D",
"EKS MK04 0003X30",
"EKS MK04 0004EED",
"EKS MK04 0006ED",
"EKS MK04 0007ED",
"EKS MK06 0001CX30",
"EKS MK06 0001ED",
"EKS MK06 0001EX30",
"EKS MK06 0002CX30",
"EKS MK06 0002ED",
"EKS MK06 0002EX30",
"EKS MK06 0003CX30",
"EKS MK06 0003D",
"EKS MK06 0003X30",
"EKS MK06 0004EED",
"EKS MK06 0006ED",
"EKS MK06 0007ED",
"EKS MK08 0001CX30",
"EKS MK08 0001ED",
"EKS MK08 0001EX30",
"EKS MK08 0002CX30",
"EKS MK08 0002ED",
"EKS MK08 0002EX30",
"EKS MK08 0003CX30",
"EKS MK08 0003D",
"EKS MK08 0003X30",
"EKS MK08 0004EED",
"EKS MK08 0006ED",
"EKS MK08 0007ED",
"EKS SK01 0001CX30",
"EKS SK01 0001ED",
"EKS SK01 0001EX30",
"EKS SK01 0002CX30",
"EKS SK01 0002ED",
"EKS SK01 0002EX30",
"EKS SK01 0003CX30",
"EKS SK01 0003D",
"EKS SK01 0003X30",
"EKS SK01 0004EED",
"EKS SK01 0006ED",
"EKS SK01 0007ED",
"EKS SK02 0001CX30",
"EKS SK02 0001ED",
"EKS SK02 0001EX30",
"EKS SK02 0002CX30",
"EKS SK02 0002ED",
"EKS SK02 0002EX30",
"EKS SK02 0003CX30",
"EKS SK02 0003D",
"EKS SK02 0003X30",
"EKS SK02 0004EED",
"EKS SK02 0006ED",
"EKS SK02 0007ED",
"EKS SK04 0001CX30",
"EKS SK04 0001ED",
"EKS SK04 0001EX30",
"EKS SK04 0002CX30",
"EKS SK04 0002ED",
"EKS SK04 0002EX30",
"EKS SK04 0003CX30",
"EKS SK04 0003D",
"EKS SK04 0003X30",
"EKS SK04 0004EED",
"EKS SK04 0006ED",
"EKS SK04 0007ED",
"EKS SK06 0001CX30",
"EKS SK06 0001ED",
"EKS SK06 0001EX30",
"EKS SK06 0002CX30",
"EKS SK06 0002ED",
"EKS SK06 0002EX30",
"EKS SK06 0003CX30",
"EKS SK06 0003D",
"EKS SK06 0003X30",
"EKS SK06 0004EED",
"EKS SK06 0006ED",
"EKS SK06 0007ED",
"EKS SK08 0001CX30",
"EKS SK08 0001ED",
"EKS SK08 0001EX30",
"EKS SK08 0002CX30",
"EKS SK08 0002ED",
"EKS SK08 0002EX30",
"EKS SK08 0003CX30",
"EKS SK08 0003D",
"EKS SK08 0003X30",
"EKS SK08 0004EED",
"EKS SK08 0006ED",
"EKS SK08 0007ED",
"EKX MK01 0005EED",
"EKX MK02 0005EED",
"EKX MK04 0005EED",
"EKX MK06 0005EED",
"EKX MK08 0005EED",
"EKX SK01 0005EED",
"EKX SK02 0005EED",
"EKX SK04 0005EED",
"EKX SK06 0005EED",
"EKX SK08 0005EED",
"ELC 080XXX 00005B",
"ELC 090XXX 00005B",
"ELC 100XXX 00005B",
"ELC XXX120 00005B",
"ELC XXX140 00005B",
"ELC XXX160 00005B",
"ELC XXX180 00005B",
"ELC XXX200 00005B",
"ELC XXX220 00005B",
"ELC XXX240 00005B",
"ELC XXX260 00005B",
"ELC XXX280 00005B",
"ELC XXX300 00005B",
"ELCS 300",
"ENC 080XXX 00025B",
"ENC 080XXX 00055B",
"ENC 090XXX 00025B",
"ENC 090XXX 00055B",
"ENC 100XXX 00025B",
"ENC 100XXX 00055B",
"ENC XXX120 00025B",
"ENC XXX120 00055B",
"ENC XXX140 00025B",
"ENC XXX140 00055B",
"ENC XXX160 00025B",
"ENC XXX160 00055B",
"ENC XXX180 00025B",
"ENC XXX180 00025DB",
"ENC XXX180 00055B",
"ENC XXX200 00025B",
"ENC XXX200 00055B",
"ENC XXX220 00025B",
"ENC XXX220 00055B",
"ENC XXX240 00025B",
"ENC XXX240 00055B",
"ENC XXX260 00025B",
"ENC XXX260 00055B",
"ENC XXX280 00025B",
"ENC XXX280 00055B",
"ENC XXX300 00025B",
"ENC XXX300 00055B",
"ERC 080XXX 00005B",
"ERC 080XXX 00025B",
"ERC 090XXX 00005B",
"ERC 090XXX 00025B",
"ERC 100XXX 00005B",
"ERC 100XXX 00025B",
"ERC 100XXX 00035B",
"ERC XXX120 00005B",
"ERC XXX120 00025B",
"ERC XXX140 00005B",
"ERC XXX140 00025B",
"ERC XXX160 00005B",
"ERC XXX160 00025B",
"ERC XXX160 00025DB",
"ERC XXX180 00005B",
"ERC XXX180 00025B",
"ERC XXX200 00005B",
"ERC XXX200 00025B",
"ERC XXX200 00035B",
"ERC XXX220 00005B",
"ERC XXX220 00025B",
"ERC XXX220 00035B",
"ERC XXX240 00005B",
"ERC XXX240 00025B",
"ERC XXX240 00035B",
"ERC XXX260 00005B",
"ERC XXX280 00005B",
"ERC XXX300 00005B",
"EWC 080XXX 00005B",
"EWC 090XXX 00005B",
"EWC 100XXX 00005B",
"EWC XXX120 00005B",
"EWC XXX140 00005B",
"EWC XXX160 00005B",
"EWC XXX180 00005B",
"EWC XXX200 00005B",
"EWC XXX220 00005B",
"EWC XXX240 00005B",
"EWC XXX260 00005B",
"EWC XXX280 00005B",
"EWC XXX300 00005B",
"FCM 2222 0004D",
"FCM 2222 0008D",
"FCM 2234 0004D",
"FCM 2246 0004D",
"FCM 2270 0004AD",
"FCM 2270 0004D",
"FCM 3030 0004D",
"FCM 3046 0004D",
"FCM 3434 0004D",
"FCM 4646 0004D",
"FHL MK06 1016S",
"FHL MK06 1266S",
"FHL MK08 1016S",
"FHL MK08 1272S",
"FHL SK08 1016S",
"FHL SK08 1266S",
"GDL PK19 2066P1",
"GDL PK19 2066P2",
"GDL PK19 3066P1",
"GDL PK19 3066P2",
"GDL SK19 2066LP1",
"GDL SK19 2066LP2",
"GDL SK19 3066LP1",
"GDL SK19 3066LP2",
"GEL M08 2065G",
"GEL M08 3065G",
"GGL MK04 3070",
"GGL MK04 307021A",
"GGL MK06 3070",
"GGL MK08 3070",
"GGL MK08 307021A",
"GGL SK06 3070",
"GGL SK08 3070",
"GGU MK04 0070",
"GGU MK04 0076F",
"GGU MK06 0070",
"GGU MK06 0076F",
"GGU MK08 0070",
"GGU SK06 0070",
"GGU SK08 0070",
"GPL MK04 3070",
"GPL MK06 3070",
"GPL MK08 3070",
"GPL SK06 3070",
"GPL SK08 3070",
"GPL SK08 3073",
"GPU MK04 0070",
"GPU MK04 0076F",
"GPU MK06 0070",
"GPU MK06 0076F",
"GPU MK08 0070",
"GPU SK06 0070",
"GPU SK08 0070",
"GTL MK08 3070",
"GTL SK08 3070",
"HFC 067120 0010B",
"HFC 067140 0010B",
"HFC 080120 0010B",
"HFC 080140 0010B",
"HFC 080160 0010",
"HFC 080160 0010B",
"HFC 080180 0010B",
"HFC 080200 0010",
"HFC 080200 0010B",
"HFC 080220 0010",
"HFC 080220 0010B",
"HFC 080240 0010B",
"HFC 090120 0010B",
"HFC 090140 0010B",
"HFC 090160 0010",
"HFC 090160 0010B",
"HFC 090180 0010B",
"HFC 090180 0010N",
"HFC 090200 0010",
"HFC 090200 0010B",
"HFC 090220 0010B",
"HFC 090240 0010",
"HFC 090240 0010B",
"HFC 090260 0010TB",
"HFC 090280 0010T",
"HFC 090280 0010TB",
"HFC 100120 0010B",
"HFC 100120 0016",
"HFC 100140 0010",
"HFC 100140 0010B",
"HFC 100140 0011TB",
"HFC 100160 0010",
"HFC 100160 0010B",
"HFC 100160 0011TB",
"HFC 100180 0010",
"HFC 100180 0010B",
"HFC 100200 0010B",
"HFC 100200 0011TB",
"HFC 100220 0010",
"HFC 100220 0010B",
"HFC 100240 0010",
"HFC 100240 0010B",
"HFC 100260 0010TB",
"HFC 100280 0010TB",
"HFC 100300 0010T",
"HFC 100300 0010TB",
"HVC 067120 0010B",
"HVC 067140 0010B",
"HVC 080120 0010B",
"HVC 080140 0010B",
"HVC 080160 0010",
"HVC 080160 0010B",
"HVC 080180 0010",
"HVC 080180 0010B",
"HVC 080200 0010",
"HVC 080200 0010B",
"HVC 080220 0010",
"HVC 080220 0010B",
"HVC 080240 0010B",
"HVC 090120 0010B",
"HVC 090140 0010B",
"HVC 090160 0010",
"HVC 090160 0010B",
"HVC 090180 0010",
"HVC 090180 0010B",
"HVC 090180 0010N",
"HVC 090200 0010",
"HVC 090200 0010B",
"HVC 090220 0010B",
"HVC 090240 0010",
"HVC 090240 0010B",
"HVC 090240 0010N",
"HVC 100120 0010AB",
"HVC 100120 0010B",
"HVC 100140 0010",
"HVC 100140 0010B",
"HVC 100140 0011TB",
"HVC 100140 0011TCB",
"HVC 100160 0010",
"HVC 100160 0010B",
"HVC 100160 0011TCB",
"HVC 100180 0010",
"HVC 100180 0010B",
"HVC 100180 0010N",
"HVC 100200 0010B",
"HVC 100200 0010N",
"HVC 100200 0011TB",
"HVC 100200 0011TCB",
"HVC 100220 0010",
"HVC 100220 0010B",
"HVC 100220 0016",
"HVC 100240 0010B",
"HVC 100240 0010T",
"ISD 060060 0000A",
"ISD 060090 1093",
"ISD 080080 1093",
"ISD 090090 0000A",
"ISD 090120 0000A",
"ISD 090120 1093",
"ISD 100100 0000A",
"ISD 100100 1093",
"ISD 100150 1093",
"ISD 120120 0000A",
"ISD 120120 1093",
"ISP 2222 0200C",
"ISP 2234 0200C",
"ISP 2246 0200C",
"ISP 3030 0200C",
"ISP 3046 0200C",
"ISP 3434 0200C",
"KLA S105 EU01",
"KLC 400 EU",
"KLF 100 AU",
"KLF 200 WW",
"KLR 200 WW",
"KMG 100 WW",
"KSX 100 WW",
"MHL MK00 5060C",
"MHL SK00 5060C",
"MHL SK00 5060H",
"MIV MR00 4260",
"MIV SR00 4260",
"MML MK04 5060V",
"MML MK04 5060VA",
"MML MK06 5060V",
"MML MK06 5060VA",
"MML MK08 5060V",
"MML MK08 5060VA",
"MML SK06 5060E",
"MML SK06 5060V",
"MML SK06 5060VA",
"MML SK08 5060E",
"MML SK08 5060V",
"MML SK08 5060VA",
"MSL SK06 5060V",
"RHL MK00 9050",
"RHL SK00 9050",
"RMM 067120 8805",
"RMM 067120 8806",
"RMM 067140 8805",
"RMM 067140 8806",
"RMM 067160 8805",
"RMM 067160 8806",
"RMM 067180 8805",
"RMM 067180 8806",
"RMM 067200 8805",
"RMM 067200 8806",
"RMM 067220 8805",
"RMM 067220 8806",
"RMM 067240 8805",
"RMM 067240 8806",
"RMM 075120 8805",
"RMM 075120 8806",
"RMM 075140 8805",
"RMM 075140 8806",
"RMM 075160 8805",
"RMM 075160 8806",
"RMM 075180 8805",
"RMM 075180 8806",
"RMM 075200 4084",
"RMM 075200 8805",
"RMM 075200 8806",
"RMM 075220 8805",
"RMM 075220 8806",
"RMM 075240 8805",
"RMM 075240 8806",
"RMM 080120 8805",
"RMM 080120 8806",
"RMM 080140 8805",
"RMM 080140 8806",
"RMM 080160 4083",
"RMM 080160 8805",
"RMM 080160 8806",
"RMM 080180 8805",
"RMM 080180 8806",
"RMM 080200 8805",
"RMM 080200 8806",
"RMM 080220 4083",
"RMM 080220 8805",
"RMM 080220 8806",
"RMM 080240 4084",
"RMM 080240 8805",
"RMM 080240 8806",
"RMM 090120 4084",
"RMM 090120 8805",
"RMM 090120 8806",
"RMM 090140 4084",
"RMM 090140 8805",
"RMM 090140 8806",
"RMM 090160 4083",
"RMM 090160 8805",
"RMM 090160 8806",
"RMM 090180 4084",
"RMM 090180 8805",
"RMM 090180 8806",
"RMM 090200 8805",
"RMM 090200 8806",
"RMM 090220 4084",
"RMM 090220 8805",
"RMM 090220 8806",
"RMM 090240 4083",
"RMM 090240 4084",
"RMM 090240 8805",
"RMM 090240 8806",
"RMM 090260 8805",
"RMM 090260 8806",
"RMM 090280 4083",
"RMM 090280 8805",
"RMM 090280 8806",
"RMM 100120 4083",
"RMM 100120 4084",
"RMM 100120 8805",
"RMM 100120 8806",
"RMM 100140 4083",
"RMM 100140 8805",
"RMM 100140 8806",
"RMM 100160 8805",
"RMM 100160 8806",
"RMM 100180 4083",
"RMM 100180 8805",
"RMM 100180 8806",
"RMM 100200 4083",
"RMM 100200 8805",
"RMM 100200 8806",
"RMM 100220 4084",
"RMM 100220 8805",
"RMM 100220 8806",
"RMM 100240 4083",
"RMM 100240 8805",
"RMM 100240 8806",
"RMM 100260 8805",
"RMM 100260 8806",
"RMM 100280 4083",
"RMM 100280 8805",
"RMM 100280 8806",
"RMM 100300 8805",
"RMM 100300 8806",
"SML MK04 0000S",
"SML MK04 0000SA",
"SML MK06 0000SA",
"SML MK08 0000S",
"SML MK08 0000SA",
"SML SK06 0000S",
"SML SK06 0000SA",
"SML SK08 0000SA",
"SSL M08 0000E",
"SSL MK04 0000SA",
"SSL MK06 0000SA",
"SSL MK08 0000SA",
"SSL SK06 0000S",
"SSL SK06 0000SA",
"SSL SK08 0000S",
"SSL SK08 0000SA",
"TCC 014 0000",
"TCC 014 0000A",
"TCC 022 3000A",
"TGR 014 0000F",
"THC 014 0000",
"THC 014 0002",
"THC 014 0002A",
"THC 014 0003",
"THC 014 00036",
"THC 014 00036A",
"THC 014 0003A",
"THC 022 0000",
"THC 022 0002",
"THC 022 0003",
"THC 022 00036",
"TOC 014 0000",
"TOC 014 0002",
"TOC 014 00026",
"TOC 014 0003",
"TOC 022 0000",
"TOC 022 00006",
"TOC 022 0002",
"TOC 022 00026",
"TOC 022 0003",
"TTK 014",
"TTK 022",
"TW2 MK08 1000",
"TW2 SK06 1073",
"TXC 014 2300",
"TXC 022 2300",
"VCE 2222 2004E",
"VCE 2234 2004E",
"VCE 2246 2004D",
"VCE 2246 2004E",
"VCE 3030 2004E",
"VCE 3046 2004D",
"VCE 3046 2004E",
"VCE 3434 2004D",
"VCE 3434 2004E",
"VCE 4646 2004E",
"VCM 2246 2004D",
"VCS 2222 2004E",
"VCS 2234 2004E",
"VCS 2246 2004E",
"VCS 3030 2004E",
"VCS 3046 2004E",
"VCS 3434 2004E",
"VCS 4646 2004E",
"VEA M35 2065G",
"VEA M35 3065G",
"VEB M35 2065G",
"VEB M35 3065G",
"VEC M35 2065G",
"VEC M35 3065G",
"XCN 8 EKS 00070",
"XCN 8 TW1 00004",
"ZCT 200K",
"ZCT 300",
"ZCZ 080K",
"ZIL MK06 8888H",
"ZIL MK10 8888",
"ZIL SK06 8888H",
"ZOZ 040 ",
"ZOZ 085",
"ZTB 014 1001",
"ZTD 022 3000",
"ZTD 022 30006",
"ZTD 022 50006",
"ZTE 014 00006D",
"ZTE 014 0000D",
"ZTE 022 00006D",
"ZTE 022 0000D",
"ZTF 014 0100D",
"ZTF 022 0100D",
"ZTP 014 ",
"ZTP 014 00006",
"ZTP 022 ",
"ZTP 022 00006",
"ZTR 014 0002D",
"ZTR 014 0024D",
"ZTR 022 0002D",
"ZTR 022 0024D",
"ZZZ 199 2222",
"ZZZ 199 2234",
"ZZZ 199 2246",
"ZZZ 199 3030",
"ZZZ 199 3046",
"ZZZ 199 3434",
"ZZZ 199 4646",
"ZZZ 233",
"CFP 080080 0073U",
"DFD P04 1085S",
"DFD P04 1100S",
"DFD PK04 1100S",
"DFD PK10 1100S",
"DFD PK10 4569S",
"DKL FK04 1100S",
"DKL FK06 4558S",
"DKL P04 1025S",
"DKL P04 1100S",
"DKL P04 4558S",
"DKL P08 1100S",
"DKL P08 4567S",
"DKL PK10 1025S",
"DKL PK10 1100S",
"DKL PK10 4558S",
"DML SK01 1085S",
"CD2 2448 1S1N2S",
"CD2 4872 3P1C2S",
"CVP 080080 0673QVA",
"CVP 150150 0673QVA",
"ENC 067XXX 00055B",
"ENC 075XXX 00055B",
"FCM 1430 0004D",
"FCM 1446 0004D",
"FMK 090120 1045S",
"HFC 075240 0010B",
"HVC 075240 0010B",
"ISD 150150 0000A",
"KLB 100 WW",
"KLF 200 US",
"KLL 150 WW",
"KLR 200 US",
"KMX 200 EU",
"KSX 100K WW",
"KUX 110 EU",
"SML FK04 0000SA",
"TGF 014 0000F",
"TGR 010 0000D",
"ZAZ 040",
"ZOZ 222 S21",
"ZZZ 129",
"ZZZ 201",
"ZZZ 201B",
"ZZZ 228",
"ASL MK04 1073",
"DKL M06 4555S",
"KLI 110 WW"
];
         $sizeModel = new SizeModel();
         $attrModel = new AttrModel();
         $windowModel = new WindowModel();
         $productModel = new ProductModel();
        foreach($data as $key=>$value){
            $itemArray = explode(" ",$value);
            if (!$windowModel->where(["name"=>$itemArray[0]])->find()){
                $window_id = $windowModel->insertGetId(["name"=>$itemArray[0],"alias"=>$itemArray[0]]);
            }
            if (isset($itemArray[2])&&$itemArray[2]){
                if (!$attrModel->where(["name"=>$itemArray[2]])->find()) {
                    $attr_id = $attrModel->insertGetId(["name" => $itemArray[2], "alias" => $itemArray[2]]);
                }
            }
            if (!$sizeModel->where(["name"=>$itemArray[1]])->find()) {
                $size_id = $sizeModel->insertGetId(["name" => $itemArray[1], "alias" => $itemArray[1]]);
            }
            $productModel->insertGetId(["type_id"=>$window_id,"size_id"=>$size_id,"attribute_id"=>$attr_id,"code"=>$value],true);
        }
    }

    //插入数据
    public function insertData(){
        $sizeModel = new SizeModel();
        $attrModel = new AttrModel();
        $windowModel = new WindowModel();
        $productModel = new ProductModel();
//        $boardModel = new BoardModel();

        $productType = ["178","139","140","179"];
        $sizeType = ["81"];
//        $attrType = ["91","92"];
//        $boardType = ["1","2","3"];
        foreach ($productType as $prodcut){
            foreach ($sizeType as $size){
//                foreach ($attrType as $attr){
                        $productName = $windowModel->where("id",$prodcut)->value("alias");
                        $sizeName = $sizeModel->where("id",$size)->value("alias");
//                        $attrName = $attrModel->where("id",$attr)->value("alias");
//                        $boardName = $boardModel->where("id",$board)->value("alias");
                        $code = $productName." ".$sizeName;
                        $productModel->insert(["type_id"=>(int)$prodcut,"size_id"=>(int)$size,"code"=>$code]);
//                }
            }
        }
    }

    public function test(){
        dump(input("get."));
    }
}
